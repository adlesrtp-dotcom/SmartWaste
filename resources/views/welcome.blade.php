<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartWaste - Politeknik Negeri Batam</title>
    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#f5f7f6] text-gray-800 font-sans antialiased min-h-screen flex flex-col justify-between">

    <!-- NAVBAR -->
    <nav class="w-full px-[8%] py-5 flex justify-between items-center bg-white border-b border-gray-200 sticky top-0 z-50">
        <a href="/" class="text-2xl font-bold text-[#16834b] tracking-tight">
            ♻ Smart<span class="text-gray-900">Waste</span>
        </a>

        <div class="flex items-center gap-6">
            <a href="/" class="text-gray-700 hover:text-[#16834b] text-sm font-medium transition">Dashboard</a>
            <a href="#fitur" class="text-gray-700 hover:text-[#16834b] text-sm font-medium transition">Fitur</a>
            <a href="#tentang" class="text-gray-700 hover:text-[#16834b] text-sm font-medium transition">Tentang</a>

            <!-- Autentikasi Laravel Breeze -->
            @if (Route::has('login'))
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-gray-900 font-medium text-sm">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-[#16834b] text-sm font-medium transition">
                            Masuk
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="bg-[#16834b] text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-[#116b3d] transition">
                                Daftar
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- HERO -->
    <section class="min-h-[600px] flex flex-col md:flex-row items-center justify-between px-[8%] py-16 gap-12">
        <div class="max-w-[600px] text-center md:text-left">
            <div class="inline-block bg-[#dff5e8] text-[#16834b] px-4 py-2 rounded-full text-sm font-semibold mb-5">
                🤖 AI Computer Vision
            </div>

            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-5 text-gray-900">
                Smart Waste,<br>
                <span class="text-[#16834b]">Cleaner Campus.</span>
            </h1>

            <p class="text-lg leading-relaxed text-gray-500 mb-8">
                SmartWaste membantu mengenali dan mengklasifikasikan jenis sampah menggunakan teknologi Artificial Intelligence untuk menciptakan lingkungan kampus yang lebih bersih.
            </p>

            <a href="/deteksi" class="inline-flex items-center gap-2 px-6 py-3.5 bg-[#16834b] text-white font-bold rounded-xl shadow-md hover:bg-[#116b3d] transition">
                📷 Mulai Deteksi
            </a>
        </div>

        <div class="w-[280px] h-[280px] md:w-[400px] md:h-[400px] bg-[#dff5e8] rounded-full flex items-center justify-center text-7xl md:text-[150px] shadow-inner">
            ♻️
        </div>
    </section>

    <!-- FITUR -->
    <section class="bg-white px-[8%] py-16 text-center" id="fitur">
        <h2 class="text-3xl font-bold mb-2 text-gray-900">Kenapa SmartWaste?</h2>
        <p class="text-gray-500 mb-10">Teknologi sederhana untuk membantu pengelolaan sampah.</p>

        <div class="flex justify-center gap-6 flex-wrap">
            <div class="w-[280px] p-8 border border-gray-200 rounded-2xl bg-white hover:shadow-lg transition">
                <div class="text-5xl mb-4">📷</div>
                <h3 class="text-xl font-bold mb-2">Deteksi Sampah</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Gunakan kamera atau upload gambar untuk mendeteksi jenis sampah.</p>
            </div>

            <div class="w-[280px] p-8 border border-gray-200 rounded-2xl bg-white hover:shadow-lg transition">
                <div class="text-5xl mb-4">🤖</div>
                <h3 class="text-xl font-bold mb-2">AI Detection</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Sistem menggunakan Computer Vision untuk mengenali objek sampah.</p>
            </div>

            <div class="w-[280px] p-8 border border-gray-200 rounded-2xl bg-white hover:shadow-lg transition">
                <div class="text-5xl mb-4">♻️</div>
                <h3 class="text-xl font-bold mb-2">Pengelolaan</h3>
                <p class="text-gray-500 text-sm leading-relaxed">Dapatkan informasi mengenai kategori dan cara pengelolaan sampah.</p>
            </div>
        </div>
    </section>

    <!-- TENTANG -->
    <section class="bg-[#f5f7f6] px-[8%] py-16 text-center border-t border-gray-200" id="tentang">
        <h2 class="text-3xl font-bold mb-4 text-gray-900">Tentang SmartWaste</h2>
        <p class="max-w-2xl mx-auto text-gray-600 leading-relaxed">
            SmartWaste merupakan sistem berbasis web yang memanfaatkan Artificial Intelligence untuk membantu mengidentifikasi jenis sampah di lingkungan kampus Politeknik Negeri Batam.
        </p>
    </section>

    <!-- FOOTER -->
    <footer class="bg-[#17201b] text-white text-center py-6 text-sm">
        <p>© 2026 SmartWaste - Politeknik Negeri Batam</p>
    </footer>

</body>
</html>