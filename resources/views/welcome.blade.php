<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - Explore Forecast</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900 flex flex-col min-h-screen">
    <!-- Main Hero Section -->
    <section class="flex flex-col items-center justify-center h-screen text-center bg-gradient-to-r from-yellow-300 to-yellow-500 text-white pt-20">
        <h1 class="text-4xl font-bold mb-4">Selamat Datang di Explore Forecast</h1>
        <p class="text-lg mb-6">Temukan destinasi wisata terbaik berdasarkan kondisi cuaca saat ini.</p>

        @guest
        <!-- Tombol Login & Register untuk Pengguna yang Belum Login -->
        <div class="flex gap-4">
            <button onclick="openModal('loginModal')" class="bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-md text-white text-lg font-semibold">Sign In</button>
        </div>
        @endguest
    </section>
    <!-- Modal Login & Register -->
    @include('auth.login')
    @include('auth.register')

    <!-- JavaScript -->
    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove("hidden");
        }

        function closeModal(id) {
            document.getElementById(id).classList.add("hidden");
        }

        window.addEventListener("click", function(event) {
            if (event.target.classList.contains('modal-background')) {
                closeModal('loginModal');
                closeModal('registerModal');
            }
        });
    </script>

</body>

</html>