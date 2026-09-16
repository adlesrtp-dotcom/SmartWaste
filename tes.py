from ultralytics import YOLO

# Memanggil model AI SmartWaste
model = YOLO('best.pt')

# Membuka webcam untuk deteksi sampah secara langsung
model.predict(source=0, show=True)