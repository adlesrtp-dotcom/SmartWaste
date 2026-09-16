from flask import Flask, request, jsonify
from ultralytics import YOLO
import cv2
import numpy as np

app = Flask(__name__)

# Load model YOLO yang sudah di-train (pastikan best.pt ada di folder utama ini)
model = YOLO('yolov8n.pt')

@app.route('/predict', methods=['POST'])
def predict():
    if 'image' not in request.files:
        return jsonify({'error': 'File gambar tidak ditemukan'}), 400
    
    file = request.files['image']
    img_bytes = file.read()
    
    # Konversi gambar agar bisa diproses YOLO
    nparr = np.frombuffer(img_bytes, np.uint8)
    img = cv2.imdecode(nparr, cv2.IMREAD_COLOR)
    
    # Jalankan deteksi objek dengan YOLO
    results = model(img)
    
    detections = []
    for r in results:
        for box in r.boxes:
            class_id = int(box.cls[0])
            label = model.names[class_id]
            confidence = float(box.conf[0])
            
            detections.append({
                'label': label,
                'confidence': round(confidence * 100, 1) # hasil dalam persen
            })
            
    return jsonify({
        'success': True,
        'detections': detections
    })

if __name__ == '__main__':
    # Jalankan server API Flask di port 5000
    app.run(host='0.0.0.0', port=5000, debug=True)