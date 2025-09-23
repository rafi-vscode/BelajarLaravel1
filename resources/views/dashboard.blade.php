<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-white leading-tight">
            {{ __('Dashboard Praktikum') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Container -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Card Profil -->
                <a href="{{ url('/profil-tugas') }}" 
                   class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-6 rounded-2xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-3xl mb-3">👨‍🎓</div>
                    <h3 class="text-xl font-bold">Profil Mahasiswa</h3>
                    <p class="text-sm text-gray-100">Lihat detail profil mahasiswa</p>
                </a>

                <!-- Card List Mahasiswa -->
                <a href="{{ url('/list-tugas') }}" 
                   class="bg-gradient-to-r from-green-500 to-emerald-600 text-white p-6 rounded-2xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-3xl mb-3">📋</div>
                    <h3 class="text-xl font-bold">Daftar Mahasiswa</h3>
                    <p class="text-sm text-gray-100">Tampilkan daftar mahasiswa dalam tabel</p>
                </a>

                <!-- Card Tambahan (Opsional) -->
                <div class="bg-gradient-to-r from-pink-500 to-red-600 text-white p-6 rounded-2xl shadow-lg transform hover:scale-105 transition duration-300">
                    <div class="text-3xl mb-3">✨</div>
                    <h3 class="text-xl font-bold">Fitur Lain</h3>
                    <p class="text-sm text-gray-100">Akan datang berikutnya 🚀</p>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
