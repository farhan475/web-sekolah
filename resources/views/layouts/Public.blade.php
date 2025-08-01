<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SMK Negeri 64 Jakarta')</title>

    <!-- Google Fonts (Opsional, untuk estetika) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite untuk CSS dan JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Menggunakan font Poppins jika diimpor */
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- ===== HEADER/NAVBAR ===== -->
    <header x-data="{ navOpen: false, scrolled: false }"
            @scroll.window="scrolled = (window.scrollY > 50)"
            class="fixed top-0 left-0 w-full z-50 transition-all duration-300"
            :class="{ 'bg-white shadow-lg': scrolled || navOpen, 'bg-transparent': !scrolled && !navOpen }">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="{{ route('beranda') }}" class="text-2xl font-bold transition-colors" :class="{'text-gray-800': scrolled || navOpen, 'text-white': !scrolled && !navOpen}">
                    SMK Negeri 64 Jakarta
                </a>

                <!-- Navigasi Desktop -->
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('beranda') }}" class="transition-colors hover:text-blue-600" :class="{'text-gray-800': scrolled || navOpen, 'text-white': !scrolled && !navOpen}">Beranda</a>
                    <a href="{{ route('profil') }}" class="transition-colors hover:text-blue-600" :class="{'text-gray-800': scrolled || navOpen, 'text-white': !scrolled && !navOpen}">Profil</a>
                    <a href="{{ route('berita') }}" class="transition-colors hover:text-blue-600" :class="{'text-gray-800': scrolled || navOpen, 'text-white': !scrolled && !navOpen}">Berita</a>
                    <a href="{{ route('kontak') }}" class="transition-colors hover:text-blue-600" :class="{'text-gray-800': scrolled || navOpen, 'text-white': !scrolled && !navOpen}">Kontak</a>
                    <a href="/login" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-transform transform hover:scale-105">Login Admin</a>
                </nav>

                <!-- Tombol Hamburger (Mobile) -->
                <button @click="navOpen = !navOpen" class="md:hidden focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-colors" :class="{'text-gray-800': scrolled || navOpen, 'text-white': !scrolled && !navOpen}" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Navigasi Mobile (Dropdown) -->
        <div x-show="navOpen" x-transition class="md:hidden bg-white shadow-lg">
            <a href="{{ route('beranda') }}" class="block py-3 px-6 text-gray-800 hover:bg-gray-100">Beranda</a>
            <a href="{{ route('profil') }}" class="block py-3 px-6 text-gray-800 hover:bg-gray-100">Profil</a>
            <a href="{{ route('berita') }}" class="block py-3 px-6 text-gray-800 hover:bg-gray-100">Berita</a>
            <a href="{{ route('kontak') }}" class="block py-3 px-6 text-gray-800 hover:bg-gray-100">Kontak</a>
            <a href="/login" class="block py-3 px-6 text-blue-600 font-semibold hover:bg-gray-100">Login Admin</a>
        </div>
    </header>

    <!-- ===== KONTEN UTAMA ===== -->
    <main>
        @yield('content')
    </main>

    <!-- ===== FOOTER ===== -->
    <footer class="bg-gray-800 text-white">
        <div class="container mx-auto px-6 py-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Tentang Kami -->
                <div>
                    <h3 class="font-bold text-lg mb-4">SMK Negeri 64 Jakarta</h3>
                    <p class="text-gray-400">Mendidik generasi penerus bangsa yang cerdas, berkarakter, dan berdaya saing global.</p>
                </div>
                <!-- Tautan Cepat -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('profil') }}" class="text-gray-400 hover:text-white">Profil Sekolah</a></li>
                        <li><a href="{{ route('berita') }}" class="text-gray-400 hover:text-white">Penerimaan Siswa</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Kurikulum</a></li>
                        <li><a href="{{ route('kontak') }}" class="text-gray-400 hover:text-white">Hubungi Kami</a></li>
                    </ul>
                </div>
                <!-- Kontak -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Kontak</h3>
                    <p class="text-gray-400">Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13890</p>
                    <p class="text-gray-400">Email: info@smkn64-jkt.sch.id / info.smkn64jkt@gmail.com</p>
                    <p class="text-gray-400">Telp: 08978891895 (Hilal) 081212001521 (Agus)</p>
                </div>
                <!-- Media Sosial -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">FB</a>
                        <a href="#" class="text-gray-400 hover:text-white">IG</a>
                        <a href="#" class="text-gray-400 hover:text-white">YT</a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-500">
                <p>© {{ date('Y') }} SMK Negeri 64 Jakarta. All rights reserved.</p>
            </div>
        </div>
    </footer>

</body>
</html>