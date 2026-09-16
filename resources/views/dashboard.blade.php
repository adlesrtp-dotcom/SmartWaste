<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-emerald-800 leading-tight">
            {{ __('Dashboard Pengguna - SmartWaste') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Banner Utama -->
            <div style="background-color: #059669; color: white; padding: 24px; border-radius: 8px; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <h3 style="font-size: 24px; font-weight: bold; margin: 0;">Selamat Datang, {{ Auth::user()->name }}! 👋</h3>
                <p style="margin-top: 8px; color: #ecfdf5;">Mari kelola dan setorkan sampahmu untuk mendukung kelestarian lingkungan Kampus Polibatam.</p>
            </div>

            <!-- Ringkasan Ringkas Metric -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 24px;">
                <div style="background-color: white; padding: 20px; border-radius: 8px; border: 1px solid #e5e7eb; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                    <p style="font-size: 14px; color: #6b7280; font-weight: 600; margin: 0;">Total Poin Terkumpul</p>
                    <p style="font-size: 32px; font-weight: 800; color: #059669; margin-top: 8px;">250 Pts</p>
                </div>

                <div style="background-color: white; padding: 20px; border-radius: 8px; border: 1px solid #e5e7eb; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                    <p style="font-size: 14px; color: #6b7280; font-weight: 600; margin: 0;">Total Sampah Disetor</p>
                    <p style="font-size: 32px; font-weight: 800; color: #1f2937; margin-top: 8px;">8.5 Kg</p>
                </div>

                <div style="background-color: white; padding: 20px; border-radius: 8px; border: 1px solid #e5e7eb; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                    <p style="font-size: 14px; color: #6b7280; font-weight: 600; margin: 0;">Status Permintaan</p>
                    <p style="font-size: 32px; font-weight: 800; color: #d97706; margin-top: 8px;">1 Diproses</p>
                </div>
            </div>

            <!-- Form Pengajuan Setor Sampah (dengan Upload Foto) -->
            <div style="background-color: white; padding: 24px; border-radius: 8px; border: 1px solid #e5e7eb; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                <h4 style="font-size: 18px; font-weight: bold; color: #1f2937; margin-bottom: 16px;">Ajukan Penjemputan / Setor Sampah</h4>
                
                <form action="#" method="POST" enctype="multipart/form-data" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
                    <div>
                        <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 6px;">Jenis Sampah</label>
                        <select style="width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px;">
                            <option>Plastik / Botol</option>
                            <option>Kertas / Kardus</option>
                            <option>Elektronik (E-Waste)</option>
                            <option>Logam / Kaleng</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 6px;">Perkiraan Berat (Kg)</label>
                        <input type="number" step="0.1" placeholder="Contoh: 2.5" style="width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px;">
                    </div>

                    <div>
                        <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 6px;">Lokasi Penjemputan / Gedung</label>
                        <input type="text" placeholder="Contoh: Gedung Utama Lt. 2" style="width: 100%; padding: 8px 12px; border: 1px solid #d1d5db; border-radius: 6px;">
                    </div>

                    <div>
                        <label style="display: block; font-size: 14px; font-weight: 600; color: #374151; margin-bottom: 6px;">Foto Sampah</label>
                        <input type="file" accept="image/*" style="width: 100%; padding: 6px 12px; border: 1px solid #d1d5db; border-radius: 6px; background-color: #f9fafb;">
                    </div>

                    <div style="grid-column: 1 / -1; display: flex; justify-content: flex-end; margin-top: 8px;">
                        <button type="button" style="background-color: #059669; color: white; padding: 10px 24px; border: none; border-radius: 6px; font-weight: bold; cursor: pointer;">
                            Kirim Pengajuan
                        </button>
                    </div>
                </form>
            </div>

            <!-- Tabel Riwayat Setoran -->
            <div style="background-color: white; padding: 24px; border-radius: 8px; border: 1px solid #e5e7eb; box-shadow: 0 1px 2px rgba(0,0,0,0.05);">
                <h4 style="font-size: 18px; font-weight: bold; color: #1f2937; margin-bottom: 16px;">Riwayat Setoran Saya</h4>
                
                <div style="overflow-x: auto;">
                    <table style="width: 100%; text-align: left; border-collapse: collapse; font-size: 14px;">
                        <thead>
                            <tr style="background-color: #f9fafb; border-bottom: 2px solid #e5e7eb; color: #4b5563; text-transform: uppercase; font-size: 12px;">
                                <th style="padding: 12px;">Tanggal</th>
                                <th style="padding: 12px;">Foto</th>
                                <th style="padding: 12px;">Jenis Sampah</th>
                                <th style="padding: 12px;">Berat</th>
                                <th style="padding: 12px;">Poin Diperoleh</th>
                                <th style="padding: 12px;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 12px;">16 Sep 2026</td>
                                <td style="padding: 12px;"><span style="color: #6b7280; font-style: italic;">[Lihat Foto]</span></td>
                                <td style="padding: 12px;">Plastik / Botol</td>
                                <td style="padding: 12px;">3.5 Kg</td>
                                <td style="padding: 12px; font-weight: bold; color: #059669;">+105 Pts</td>
                                <td style="padding: 12px;"><span style="background-color: #fef3c7; color: #92400e; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 600;">Menunggu</span></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #f3f4f6;">
                                <td style="padding: 12px;">12 Sep 2026</td>
                                <td style="padding: 12px;"><span style="color: #6b7280; font-style: italic;">[Lihat Foto]</span></td>
                                <td style="padding: 12px;">Kertas / Kardus</td>
                                <td style="padding: 12px;">5.0 Kg</td>
                                <td style="padding: 12px; font-weight: bold; color: #059669;">+145 Pts</td>
                                <td style="padding: 12px;"><span style="background-color: #d1fae5; color: #065f46; padding: 4px 8px; border-radius: 4px; font-size: 12px; font-weight: 600;">Selesai</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>