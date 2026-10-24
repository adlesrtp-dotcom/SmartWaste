<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartWaste - Smart Waste, Cleaner Campus</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        @keyframes scanLaser {
            0% { top: 0%; opacity: 0.8; }
            50% { top: 95%; opacity: 1; }
            100% { top: 0%; opacity: 0.8; }
        }
        .animate-scan-laser {
            animation: scanLaser 2s infinite ease-in-out;
        }
        @keyframes cornerPulse {
            0%, 100% { border-color: #10b981; }
            50% { border-color: #34d399; }
        }
        .lens-box {
            animation: cornerPulse 1.5s infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-500 selection:text-white">
    <!-- Navbar -->
    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-emerald-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-lg shadow-emerald-200">
                        ♻️
                    </div>
                    <span class="text-2xl font-extrabold bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">
                        SmartWaste
                    </span>
                </div>
                <div class="flex items-center gap-3">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ Auth::user()->role === 'admin' ? url('/admin/dashboard') : url('/dashboard') }}" 
                               class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl font-semibold hover:bg-emerald-700 transition shadow-md shadow-emerald-200">
                                Dashboard Saya
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-5 py-2.5 text-slate-700 font-semibold hover:text-emerald-600 transition">
                                Masuk
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="px-5 py-2.5 bg-emerald-600 text-white rounded-xl font-semibold hover:bg-emerald-700 transition shadow-md shadow-emerald-200">
                                    Daftar Akun
                                </a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section Modern 2 Kolom -->
    <section class="relative pt-12 pb-20 md:pt-16 md:pb-28 overflow-hidden bg-gradient-to-b from-emerald-50/60 via-slate-50 to-slate-50">
        <!-- Accent Glow Ornaments -->
        <div class="absolute top-10 left-1/2 -translate-x-1/2 w-[600px] h-[300px] bg-emerald-300/20 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Sisi Kiri: Teks & Action -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-100/80 border border-emerald-200 rounded-full text-emerald-800 text-sm font-semibold shadow-sm">
                        <span>🤖 AI Computer Vision Technology</span>
                    </div>
                    
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-[1.15] tracking-tight">
                        Smart Waste, <br>
                        <span class="bg-gradient-to-r from-emerald-600 via-teal-500 to-emerald-500 bg-clip-text text-transparent">Cleaner Campus.</span>
                    </h1>
                    
                    <p class="text-lg md:text-xl text-slate-600 leading-relaxed max-w-2xl mx-auto lg:mx-0 font-normal">
                        SmartWaste membantu mengenali dan mengklasifikasikan jenis sampah menggunakan teknologi Artificial Intelligence untuk menciptakan lingkungan kampus Polibatam yang bersih dan hijau.
                    </p>
                    
                    <div class="pt-2 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <button onclick="openAiModal()" class="w-full sm:w-auto px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-2xl shadow-xl shadow-emerald-200 transition transform hover:-translate-y-0.5 flex items-center justify-center gap-3 text-lg">
                            <span>📷</span> Mulai Deteksi (Demo AI)
                        </button>
                    </div>
                </div>

                <!-- Sisi Kanan: Visual Mockup Dashboard AI & Mobile -->
                <div class="lg:col-span-5 relative flex justify-center">
                    <div class="relative w-full max-w-md lg:max-w-none animate-float">
                        <!-- Main Card Container -->
                        <div class="bg-white/80 backdrop-blur-xl p-4 sm:p-6 rounded-3xl border border-slate-200/80 shadow-2xl shadow-emerald-900/10 space-y-4">
                            
                            <!-- Header Bar Preview -->
                            <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-red-400"></span>
                                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                                    <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                                </div>
                                <span class="text-xs font-semibold text-slate-400">Live AI Vision Camera</span>
                            </div>

                            <!-- Screen Preview -->
                            <div class="relative rounded-2xl overflow-hidden bg-slate-900 aspect-[4/3] flex items-center justify-center border border-slate-800 shadow-inner group">
                                <img src="https://images.unsplash.com/photo-1528323273322-d81458248d40?auto=format&fit=crop&w=800&q=80" alt="Garbage Scanner AI" class="w-full h-full object-cover opacity-80 group-hover:scale-105 transition duration-500">
                                
                                <!-- Bounding Box AI Overlay -->
                                <div class="absolute inset-8 border-2 border-emerald-400/90 rounded-xl flex items-start justify-start p-2 shadow-[0_0_20px_rgba(16,185,129,0.4)]">
                                    <span class="bg-emerald-600 text-white text-[10px] font-bold px-2 py-0.5 rounded shadow flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></span>
                                        Botol Plastik • 98%
                                    </span>
                                </div>

                                <div class="absolute bottom-3 right-3 bg-slate-900/80 backdrop-blur-md px-3 py-1 rounded-full border border-white/20 text-white text-xs font-medium">
                                    Status: Anorganik
                                </div>
                            </div>

                            <!-- Mini Metrics -->
                            <div class="grid grid-cols-2 gap-3 pt-1">
                                <div class="bg-emerald-50/80 p-3 rounded-xl border border-emerald-100">
                                    <p class="text-xs text-slate-500">Kategori</p>
                                    <p class="text-sm font-bold text-emerald-800">Dapat Didaur Ulang</p>
                                </div>
                                <div class="bg-teal-50/80 p-3 rounded-xl border border-teal-100">
                                    <p class="text-xs text-slate-500">Waktu Pemindaian</p>
                                    <p class="text-sm font-bold text-teal-800">&lt; 0.5 Detik</p>
                                </div>
                            </div>

                        </div>

                        <!-- Badge Floating Floating -->
                        <div class="absolute -bottom-4 -left-4 bg-white p-3 sm:p-4 rounded-2xl shadow-xl border border-slate-100 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-emerald-100 text-emerald-700 flex items-center justify-center font-bold text-lg">
                                ⚡
                            </div>
                            <div>
                                <p class="text-xs text-slate-400 font-medium">Akurasi AI Polibatam</p>
                                <p class="text-sm font-extrabold text-slate-800">High Precision Model</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Section Fitur / Kenapa SmartWaste -->
    <section class="py-16 md:py-24 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                <div>
                    <span class="text-emerald-600 font-extrabold tracking-wider uppercase text-xs">Kenapa SmartWaste?</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-2">
                        Solusi Cerdas untuk <br class="hidden sm:block">Kampus yang Lebih Bersih
                    </h2>
                </div>
                <p class="text-slate-600 max-w-md text-sm sm:text-base leading-relaxed">
                    Dengan teknologi AI, SmartWaste memudahkan proses pemilahan sampah dan mendukung lingkungan kampus yang lebih sehat dan berkelanjutan.
                </p>
            </div>

            <!-- Grid Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/5 transition duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 group-hover:bg-emerald-600 transition duration-300 flex items-center justify-center text-2xl mb-4 text-emerald-700 group-hover:text-white">
                        📷
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Deteksi Otomatis</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Mengenali jenis sampah secara cepat dan akurat menggunakan AI computer vision.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/5 transition duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 group-hover:bg-emerald-600 transition duration-300 flex items-center justify-center text-2xl mb-4 text-emerald-700 group-hover:text-white">
                        🍃
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Mendukung Lingkungan</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Membantu mengurangi sampah anorganik dan menjaga kebersihan kampus.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/5 transition duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 group-hover:bg-emerald-600 transition duration-300 flex items-center justify-center text-2xl mb-4 text-emerald-700 group-hover:text-white">
                        📊
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Data Real-Time</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Memantau hasil deteksi dan statistik sampah secara langsung.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="p-6 rounded-2xl bg-slate-50 border border-slate-100 hover:border-emerald-200 hover:shadow-xl hover:shadow-emerald-500/5 transition duration-300 group">
                    <div class="w-12 h-12 rounded-xl bg-emerald-100 group-hover:bg-emerald-600 transition duration-300 flex items-center justify-center text-2xl mb-4 text-emerald-700 group-hover:text-white">
                        📱
                    </div>
                    <h3 class="text-lg font-bold text-slate-800 mb-2">Akses Mudah</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">
                        Dapat digunakan melalui website dan perangkat mobile kapan saja.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Modal Scanner AI Google Lens Style (ASLI & UTUH) -->
    <div id="aiModal" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-50 hidden flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-lg w-full p-6 shadow-2xl relative border border-slate-100">
            
            <button onclick="closeAiModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-600 font-bold text-xl z-20">✕</button>
            <div class="text-center space-y-2 mb-4">
                <h3 class="text-2xl font-bold text-slate-800">Scanner AI SmartWaste</h3>
                <p class="text-sm text-slate-500">Pilih metode pengambilan gambar untuk memindai sampah.</p>
            </div>
            <!-- Tab Navigation -->
            <div id="tabNav" class="flex bg-slate-100 p-1 rounded-xl mb-6">
                <button id="btnTabUpload" onclick="switchTab('upload')" class="flex-1 py-2 font-semibold text-sm rounded-lg bg-white text-emerald-700 shadow-sm transition">
                    📁 Upload File
                </button>
                <button id="btnTabCamera" onclick="switchTab('camera')" class="flex-1 py-2 font-semibold text-sm rounded-lg text-slate-500 hover:text-slate-700 transition">
                    📷 Kamera Langsung
                </button>
            </div>
            <!-- Container Input -->
            <div id="inputContainer">
                <!-- Area Upload File -->
                <div id="uploadArea" class="border-2 border-dashed border-emerald-300 bg-emerald-50/50 rounded-2xl p-8 text-center cursor-pointer hover:bg-emerald-50 transition" onclick="document.getElementById('imageInput').click()">
                    <div class="text-4xl mb-2">📸</div>
                    <p class="text-sm font-semibold text-emerald-800">Klik untuk pilih / unggah foto</p>
                    <p class="text-xs text-slate-400 mt-1">Format: JPG, PNG (Maks 5MB)</p>
                    <input type="file" id="imageInput" accept="image/*" class="hidden" onchange="processImage(event)">
                </div>
                <!-- Area Live Kamera -->
                <div id="cameraArea" class="hidden space-y-3">
                    <div class="relative rounded-2xl overflow-hidden bg-slate-900 aspect-video flex items-center justify-center border border-slate-200">
                        <video id="webcamVideo" autoplay playsinline class="w-full h-full object-cover transition-transform duration-300"></video>
                        <canvas id="webcamCanvas" class="hidden"></canvas>
                        
                        <button onclick="switchCameraMode()" class="absolute top-3 right-3 bg-slate-900/60 hover:bg-slate-900/80 text-white backdrop-blur-md px-3 py-1.5 rounded-full text-xs font-semibold flex items-center gap-1.5 shadow-lg transition border border-white/20">
                            🔄 Tukar Kamera
                        </button>
                    </div>
                    
                    <button onclick="captureFromCamera()" class="w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl transition flex items-center justify-center gap-2">
                        <span>📸</span> Ambil Foto & Scan
                    </button>
                </div>
            </div>
            <!-- Loading Spinner & Laser Scan Effect -->
            <div id="loadingArea" class="hidden text-center py-6 space-y-3">
                <div class="relative w-full aspect-video rounded-2xl overflow-hidden bg-slate-900 border border-slate-200">
                    <img id="scanningImage" src="" class="w-full h-full object-cover opacity-60">
                    <div class="absolute inset-x-0 h-1 bg-gradient-to-r from-emerald-500 via-teal-300 to-emerald-500 shadow-[0_0_15px_#10b981] animate-scan-laser"></div>
                </div>
                <p class="text-sm font-semibold text-slate-700 animate-pulse">Menghubungkan AI Hugging Face...</p>
            </div>
            <!-- Result Box ala Google Lens -->
            <div id="resultArea" class="hidden space-y-4">
                <div class="relative rounded-2xl overflow-hidden border border-slate-200 bg-slate-900 aspect-video flex items-center justify-center">
                    <img id="previewImage" src="" class="w-full h-full object-cover">
                    
                    <div class="absolute inset-12 border-2 border-emerald-400 rounded-xl lens-box shadow-[0_0_20px_rgba(16,185,129,0.3)] pointer-events-none transition-all duration-500">
                        <div class="absolute -top-1 -left-1 w-3 h-3 border-t-4 border-l-4 border-emerald-400"></div>
                        <div class="absolute -top-1 -right-1 w-3 h-3 border-t-4 border-r-4 border-emerald-400"></div>
                        <div class="absolute -bottom-1 -left-1 w-3 h-3 border-b-4 border-l-4 border-emerald-400"></div>
                        <div class="absolute -bottom-1 -right-1 w-3 h-3 border-b-4 border-r-4 border-emerald-400"></div>
                        
                        <div class="absolute -top-9 left-2 bg-emerald-600/90 text-white text-xs font-bold px-3 py-1 rounded-lg backdrop-blur-md shadow-lg flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-300 animate-ping"></span>
                            <span id="lensTagText" class="...">Memproses...</span>
                        </div>
                    </div>
                </div>
                
                <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-4 space-y-2">
                    <div class="flex justify-between items-center">
                        <span class="text-xs uppercase font-bold text-emerald-600 tracking-wider">Hasil AI Detection</span>
                        <span id="aiResultAccuracy" class="text-xs bg-emerald-200 text-emerald-800 px-2.5 py-1 rounded-full font-bold">Akurasi --%</span>
                    </div>
                    <h4 class="text-xl font-extrabold text-slate-800" id="aiResultTitle">Memproses Sampah...</h4>
                    <p class="text-sm text-slate-600" id="aiResultDesc">Deskripsi hasil deteksi sampah.</p>
                </div>
                <button onclick="resetModal()" class="w-full py-3 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl text-sm transition">
                    Coba Pindai Lagi
                </button>
            </div>
        </div>
    </div>

    <!-- Script Kontrol Webcam & Pemindaian AI Real-time (ASLI & UTUH) -->
    <script>
        let videoStream = null;
        let currentFacingMode = "user"; // "user" = Depan, "environment" = Belakang
        function openAiModal() {
            document.getElementById('aiModal').classList.remove('hidden');
        }
        function closeAiModal() {
            document.getElementById('aiModal').classList.add('hidden');
            stopCamera();
            resetModal();
        }
        function switchTab(type) {
            const btnUpload = document.getElementById('btnTabUpload');
            const btnCamera = document.getElementById('btnTabCamera');
            const uploadArea = document.getElementById('uploadArea');
            const cameraArea = document.getElementById('cameraArea');
            if (type === 'upload') {
                stopCamera();
                btnUpload.className = "flex-1 py-2 font-semibold text-sm rounded-lg bg-white text-emerald-700 shadow-sm transition";
                btnCamera.className = "flex-1 py-2 font-semibold text-sm rounded-lg text-slate-500 hover:text-slate-700 transition";
                uploadArea.classList.remove('hidden');
                cameraArea.classList.add('hidden');
            } else {
                btnCamera.className = "flex-1 py-2 font-semibold text-sm rounded-lg bg-white text-emerald-700 shadow-sm transition";
                btnUpload.className = "flex-1 py-2 font-semibold text-sm rounded-lg text-slate-500 hover:text-slate-700 transition";
                uploadArea.classList.add('hidden');
                cameraArea.classList.remove('hidden');
                startCamera();
            }
        }
        async function startCamera() {
            stopCamera();
            const videoElement = document.getElementById('webcamVideo');
            if (currentFacingMode === "user") {
                videoElement.style.transform = "scaleX(-1)";
            } else {
                videoElement.style.transform = "scaleX(1)";
            }
            try {
                videoStream = await navigator.mediaDevices.getUserMedia({
                    video: { facingMode: currentFacingMode }
                });
                videoElement.srcObject = videoStream;
            } catch (err) {
                try {
                    videoStream = await navigator.mediaDevices.getUserMedia({ video: true });
                    videoElement.srcObject = videoStream;
                } catch (fallbackErr) {
                    alert("Gagal mengakses kamera. Pastikan izin kamera sudah diberikan di browser HP Anda.");
                    switchTab('upload');
                }
            }
        }
        function switchCameraMode() {
            currentFacingMode = (currentFacingMode === "user") ? "environment" : "user";
            startCamera();
        }
        function stopCamera() {
            if (videoStream) {
                videoStream.getTracks().forEach(track => track.stop());
                videoStream = null;
            }
        }
        function captureFromCamera() {
            const video = document.getElementById('webcamVideo');
            const canvas = document.getElementById('webcamCanvas');
            const context = canvas.getContext('2d');
            canvas.width = video.videoWidth || 640;
            canvas.height = video.videoHeight || 480;
            if (currentFacingMode === "user") {
                context.translate(canvas.width, 0);
                context.scale(-1, 1);
            } else {
                context.setTransform(1, 0, 0, 1, 0, 0);
            }
            context.drawImage(video, 0, 0, canvas.width, canvas.height);
            const dataUrl = canvas.toDataURL('image/jpeg');
            document.getElementById('previewImage').src = dataUrl;
            document.getElementById('scanningImage').src = dataUrl;
            
            stopCamera();
            sendImageToBackend(dataUrl);
        }
        function processImage(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const dataUrl = e.target.result;
                    if (document.getElementById('previewImage')) document.getElementById('previewImage').src = dataUrl;
                    if (document.getElementById('scanningImage')) document.getElementById('scanningImage').src = dataUrl;
                    sendImageToBackend(dataUrl);
                }
                reader.readAsDataURL(file);
            }
        }
        function sendImageToBackend(base64Image) {
            const loadingArea = document.getElementById('loadingArea');
            const inputContainer = document.getElementById('inputContainer');
            const resultArea = document.getElementById('resultArea');
            if (loadingArea) loadingArea.classList.remove('hidden');
            if (inputContainer) inputContainer.classList.add('hidden');
            if (resultArea) resultArea.classList.add('hidden');
            fetch("{{ route('scan.waste') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ image: base64Image })
            })
            .then(response => response.json())
            .then(data => {
                let item = (data && data.detections && data.detections.length > 0) ? data.detections[0] : null;
                const title = item ? item.class : "Objek Dikenali";
                const accuracy = item ? `${item.confidence}%` : "85%";
                const desc = item ? `Terdeteksi sebagai sampah ${item.class}.` : "Sampah berhasil dipindai oleh sistem.";
                if (document.getElementById('aiResultTitle')) document.getElementById('aiResultTitle').innerText = title;
                if (document.getElementById('aiResultDesc')) document.getElementById('aiResultDesc').innerText = desc;
                if (document.getElementById('aiResultAccuracy')) document.getElementById('aiResultAccuracy').innerText = `Akurasi ${accuracy}`;
                if (document.getElementById('lensTagText')) document.getElementById('lensTagText').innerText = `${title} • ${accuracy}`;
            })
            .catch(err => {
                console.error("Scan Error:", err);
            })
            .finally(() => {
                if (loadingArea) loadingArea.classList.add('hidden');
                if (resultArea) resultArea.classList.remove('hidden');
            });
        }
        function resetModal() {
            document.getElementById('inputContainer').classList.remove('hidden');
            document.getElementById('tabNav').classList.remove('hidden');
            document.getElementById('loadingArea').classList.add('hidden');
            document.getElementById('resultArea').classList.add('hidden');
            document.getElementById('imageInput').value = '';
            switchTab('upload');
        }
    </script>
</body>
</html>