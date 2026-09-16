<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WasteScanController extends Controller
{
    public function scanImage(Request $request)
{
    try {
        $imagePath = null;

        if ($request->has('image') && str_contains($request->image, 'data:image')) {
            $imgData = $request->image;
            $imgData = preg_replace('/^data:image\/\w+;base64,/', '', $imgData);
            $imgData = str_replace(' ', '+', $imgData);
            $fileName = 'scan_' . time() . '.jpg';
            \Storage::disk('public')->put('temp_scans/' . $fileName, base64_decode($imgData));
            $imagePath = storage_path('app/public/temp_scans/' . $fileName);
        }

        if ($imagePath) {
            $pythonBin = 'C:\\Users\\VICTUS\\AppData\\Local\\Python\\pythoncore-3.14-64\\python.exe';
            $scriptPath = app_path('Http/Controllers/scan_image.py');

            // Eksekusi skrip Python
            $command = '"' . $pythonBin . '" "' . $scriptPath . '" "' . $imagePath . '" 2>&1';
            $output = shell_exec($command);

            $result = json_decode($output, true);

            // Jika berhasil terdeteksi
            if ($result && isset($result['detections']) && count($result['detections']) > 0) {
                return response()->json($result);
            }

            // Tampilkan error mentah dari Python jika gagal
            if (!empty($output)) {
                return response()->json([
                    'status' => 'success',
                    'detections' => [
                        ['class' => trim($output), 'confidence' => 0]
                    ]
                ]);
            }
        }

        return response()->json([
            'status' => 'success',
            'detections' => [
                ['class' => 'Tidak Terdeteksi', 'confidence' => 0]
            ]
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage()
        ], 500);
    }
}
}