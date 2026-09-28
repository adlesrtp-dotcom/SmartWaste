from ultralytics import YOLO

if __name__ == '__main__':
    # Load model dasar YOLOv8
    model = YOLO('yolov8n.pt')

    # Jalankan proses training 30 Epoch
    # Pastikan kamu sudah punya folder dataset dan file data.yaml
    model.train(
        data='data.yaml',  # Ubah sesuai jalur/path file data.yaml kamu
        epochs=30,         # 30 Epoch pelatihan
        imgsz=640,
        batch=16
    )