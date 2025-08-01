@extends('layouts.public')

@section('title', 'Kontak - SMK Negeri 64 Jakarta')

@section('content')

<!-- ===== HERO SECTION UNTUK KONTAK ===== -->
<section class="relative h-[300px] md:h-[400px] flex items-center justify-center text-white">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-60"></div>

    <!-- Content -->
    <div class="relative z-10 text-center px-6">
        <h1 class="text-4xl md:text-5xl font-bold">Hubungi Kami</h1>
        <p class="text-lg md:text-xl text-gray-200 mt-2">Kami siap mendengar dari Anda.</p>
    </div>
</section>

<!-- ===== KONTEN UTAMA KONTAK ===== -->
<div class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Kolom Kiri: Informasi Kontak & Peta -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold mb-4">Informasi Kontak</h2>
                    <div class="space-y-4 text-gray-700">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span>Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13890</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 mr-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span> info@smkn64-jkt.sch.id / info.smkn64jkt@gmail.com</span>
                        </div>
                        <div class="flex items-center">
                             <svg class="w-6 h-6 mr-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span>08978891895 (Hilal) 081212001521 (Agus)</span>
                        </div>
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold mb-4">Lokasi Kami</h2>
                    <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden shadow-lg">
                        <!-- Ganti URL embed Google Maps di bawah ini dengan lokasi sekolah Anda -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.674777385557!2d106.91055202499106!3d-6.3063898936828435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993005e0dd0e5%3A0xb2588e45817cf136!2sSMK%20Negeri%2064%20Jakarta!5e0!3m2!1sen!2sid!4v1753975843312!5m2!1sen!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Formulir Kontak -->
            <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                <form action="#" method="POST">
                    @csrf
                    <!-- Nama -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="John Doe" required>
                    </div>
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Alamat Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="anda@email.com" required>
                    </div>
                    <!-- Subjek -->
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 font-semibold mb-2">Subjek</label>
                        <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tujuan pesan Anda" required>
                    </div>
                    <!-- Pesan -->
                    <div class="mb-6">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
                    </div>
                    <!-- Tombol Kirim -->
                    <div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-transform transform hover:scale-105">
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection