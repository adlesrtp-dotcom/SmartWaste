<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-emerald-800 leading-tight">
            {{ __('Dashboard Pengelola SmartWaste (ADMIN)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Banner Kartu Selamat Datang -->
            <div class="bg-emerald-600 overflow-hidden shadow-sm sm:rounded-lg text-white p-6">
                <h3 class="text-2xl font-bold">Halo, {{ Auth::user()->name }}! 👋</h3>
                <p class="mt-2 text-emerald-100">Selamat datang di Panel Kontrol Utama SmartWaste Polibatam.</p>
            </div>

            <!-- Ringkasan Kartu Statistik -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-500">Total Sampah Terkumpul</p>
                    <p class="text-3xl font-bold text-gray-800 mt-2">128.5 Kg</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-500">Permintaan Penjemputan</p>
                    <p class="text-3xl font-bold text-emerald-600 mt-2">12 Baru</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                    <p class="text-sm font-medium text-gray-500">Total Pengguna Aktif</p>
                    <p class="text-3xl font-bold text-gray-800 mt-2">45 Akun</p>
                </div>
            </div>

            <!-- Tabel Aktivitas Terbaru -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h4 class="font-semibold text-gray-800 mb-4">Aktivitas Penjemputan Terbaru</h4>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-600">
                        <thead class="bg-gray-50 text-gray-700 uppercase text-xs">
                            <tr>
                                <th class="py-3 px-4">Pengguna</th>
                                <th class="py-3 px-4">Jenis Sampah</th>
                                <th class="py-3 px-4">Berat (Kg)</th>
                                <th class="py-3 px-4">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="py-3 px-4 font-medium text-gray-800">Muhammad Mirza</td>
                                <td class="py-3 px-4">Plastik / Botol</td>
                                <td class="py-3 px-4">3.5 Kg</td>
                                <td class="py-3 px-4"><span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs font-semibold">Menunggu</span></td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4 font-medium text-gray-800">Nisa</td>
                                <td class="py-3 px-4">Kertas / Kardus</td>
                                <td class="py-3 px-4">5.0 Kg</td>
                                <td class="py-3 px-4"><span class="bg-emerald-100 text-emerald-800 px-2 py-1 rounded text-xs font-semibold">Selesai</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>