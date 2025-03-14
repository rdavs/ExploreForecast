<header class="bg-[#FFB703] text-white py-4 px-6 pb-4 flex justify-between items-center shadow-md fixed top-0 w-full z-50">
    <!-- Logo -->
    <div class="text-lg font-bold">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Saya" class="h-16">
        </a>
    </div>

    <!-- Cuaca -->
    <div id="weather" class="text-sm flex items-center gap-4 text-gray-900 bg-transparent"></div>

    <!-- Navigasi & Autentikasi -->
    <div class="flex items-center gap-4">
        @auth
        <!-- Jika pengguna sudah login -->
        <div class="relative">
            <button id="userMenuButton" class="flex items-center gap-3 px-4 py-2 bg-white text-gray-900 rounded-full shadow-md hover:bg-gray-200">
                <span>{{ Auth::user()->name }}</span>
            </button>
            <!-- Menu Dropdown -->
            <div id="userMenu" class="absolute right-0 mt-2 w-48 bg-white text-gray-900 rounded-md shadow-lg hidden">
                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-200">Profil</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-200">Keluar</button>
                </form>
            </div>
        </div>
        @endauth
    </div>
</header>

<!-- JavaScript untuk Dropdown Pengguna -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const userMenuButton = document.getElementById("userMenuButton");
        const userMenu = document.getElementById("userMenu");

        if (userMenuButton) {
            userMenuButton.addEventListener("click", function() {
                userMenu.classList.toggle("hidden");
            });

            // Menutup menu jika klik di luar
            document.addEventListener("click", function(event) {
                if (!userMenu.contains(event.target) && !userMenuButton.contains(event.target)) {
                    userMenu.classList.add("hidden");
                }
            });
        }
    });

    document.addEventListener("DOMContentLoaded", function() {
        const apiKey = "5695d1d25d833b9a7bf8e87bb3b5de67";
        const city = "Bandung"; // Bisa diganti sesuai kota yang diinginkan
        const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=${apiKey}&lang=id`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                const temperature = Math.round(data.main.temp);
                const humidity = data.main.humidity;
                const windSpeed = data.wind.speed;
                const precipitation = data.clouds.all; // Estimasi presipitasi
                const weatherDescription = data.weather[0].description;
                const icon = `https://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png`;
                const day = new Date().toLocaleDateString('id-ID', {
                    weekday: 'long'
                });

                // Memperbarui tampilan cuaca dengan desain lebih rapi
                document.getElementById("weather").innerHTML = `
                        <div class="flex items-center gap-4">
                            <img src="${icon}" alt="ikon-cuaca" class="w-10 h-10">
                            <div>
                                <p class="text-sm font-bold">${temperature}°C</p>
                                <p class="text-xs">Presipitasi: ${precipitation}% | Kelembapan: ${humidity}% | Angin: ${windSpeed} km/h</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm font-semibold">${day}</p>
                                <p class="text-xs">${weatherDescription}</p>
                            </div>
                        </div>
                    `;
            })
            .catch(error => {
                console.error("Terjadi kesalahan dalam mengambil data cuaca:", error);
                document.getElementById("weather").innerText = "Data cuaca tidak tersedia";
            });
    });
</script>
