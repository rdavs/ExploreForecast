<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Bar Pencarian -->
    <div class="flex flex-col items-center mt-14">
        <p class="text-xl font-semibold mb-3">Mau pergi ke mana hari ini?</p>
        <div class="flex items-center gap-1 mt-4 bg-white p-2 rounded-lg shadow-md w-full max-w-4xl">
            <div class="relative flex-1">
                <input type="text" id="search" placeholder="Cari destinasi..." class="w-full p-2 pl-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700">
                <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m2.35-5.65a7 7 0 1 1-14 0 7 7 0 0 1 14 0z" />
                </svg>
            </div>
            <div class="relative flex-1">
                <select class="w-full p-2 pl-10 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700">
                    <option selected hidden>Jenis Wisata</option>
                    <option value="alam">Alam</option>
                    <option value="budaya">Budaya</option>
                    <option value="kuliner">Kuliner</option>
                    <option value="hiburan">Hiburan</option>
                </select>
            </div>
            <button class="bg-[#219EBC] hover:bg-[#023047] text-white px-5 py-2 rounded-md font-semibold">Cari Sekarang</button>
        </div>
    </div>

    <!-- Konten Utama -->
    <main class="flex flex-col flex-grow p-6 lg:p-12 gap-6 overflow-y-auto w-full max-w-6xl mx-auto">
        <!-- Tentang Website dengan Slider -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex items-center justify-center text-center flex-col">
                        <img src="{{ asset('images/slider1.jpg') }}" alt="foto 1" class="w-full h-full object-cover rounded-lg mb-2">
                        <h2 class="text-xl font-semibold mb-2">Tentang 1</h2>
                        <p class="text-gray-700">Deskripsi tentang 1</p>
                    </div>
                    <div class="swiper-slide flex items-center justify-center text-center flex-col">
                        <img src="{{ asset('images/slider2.jpg') }}" alt="foto 2" class="w-full h-full object-cover rounded-lg mb-2">
                        <h2 class="text-xl font-semibold mb-2">Tentang 2</h2>
                        <p class="text-gray-700">Deskripsi tentang 2</p>
                    </div>
                    <div class="swiper-slide flex items-center justify-center text-center flex-col">
                        <img src="{{ asset('images/slider3.png') }}" alt="foto 3" class="w-full h-full object-cover rounded-lg mb-2">
                        <h2 class="text-xl font-semibold mb-2">Tentang 3</h2>
                        <p class="text-gray-700">Deskripsi tentang 3</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Rekomendasi 1 -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Rekomendasi</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Artikel terbaru</li>
                <li>Produk unggulan</li>
                <li>Tips bermanfaat</li>
            </ul>
        </section>

        <!-- Rekomendasi 2 -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Rekomendasi</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Artikel terbaru</li>
                <li>Produk unggulan</li>
                <li>Tips bermanfaat</li>
            </ul>
        </section>

        <!-- Rekomendasi 3 -->
        <section class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-2">Rekomendasi</h2>
            <ul class="list-disc list-inside text-gray-700 space-y-1">
                <li>Artikel terbaru</li>
                <li>Produk unggulan</li>
                <li>Tips bermanfaat</li>
            </ul>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-auto">
        <p>Kontak: info@example.com | Telepon: +62 812-3456-7890</p>
    </footer>

    <!-- SwiperJS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            autoplay: {
                delay: 2000, // 2 detik
                disableOnInteraction: false // Tetap autoplay meskipun user berinteraksi
            },
            loop: true, // Agar slider terus berulang
        });
    </script>
</x-app-layout>