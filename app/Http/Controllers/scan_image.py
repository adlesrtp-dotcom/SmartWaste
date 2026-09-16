import sys
import json
import os

# Matikan log bawaan ultralytics agar output terminal tetap bersih
os.environ['YOLO_VERBOSE'] = 'False'

try:
    from ultralytics import YOLO

    if len(sys.argv) < 2:
        print(json.dumps({'status': 'error', 'message': 'Path gambar tidak ditemukan'}))
        sys.exit(1)

    image_path = sys.argv[1]
    
    # Path absolut ke best.pt di root project (naik 3 folder dari Controllers)
    base_dir = os.path.dirname(os.path.abspath(__file__))
    root_dir = os.path.abspath(os.path.join(base_dir, '../../..'))
    model_path = os.path.join(root_dir, 'best.pt')

    if not os.path.exists(model_path):
        print(json.dumps({'status': 'error', 'message': f'Model tidak ditemukan di {model_path}'}))
        sys.exit(1)

    model = YOLO(model_path)
    
    # Menurunkan ambang batas deteksi menjadi 15% (conf=0.15) agar gambar sulit/tumpukan lebih mudah terdeteksi
    results = model(image_path, verbose=False, conf=0.15)
    detections = []

    for r in results:
        for box in r.boxes:
            detections.append({
                'class': model.names[int(box.cls[0])],
                'confidence': round(float(box.conf[0]) * 100, 1)
            })

    # Cetak hanya JSON murni ke output terminal
    print(json.dumps({'status': 'success', 'detections': detections}))

except Exception as e:
    print(json.dumps({'status': 'error', 'message': str(e)}))