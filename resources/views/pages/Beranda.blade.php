@extends('layouts.public')

@section('title', 'Beranda - SMA Harapan Bangsa')

@section('content')

<!-- ===== 1. HERO SECTION ===== -->
<section class="relative h-screen flex items-center justify-center text-white">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/hero-bg.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative z-10 text-center px-6">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4 animate-fade-in-down">
            Membentuk Masa Depan Gemilang Melalui Pendidikan Berkualitas
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-3xl mx-auto animate-fade-in-up">
            Selamat datang di SMA Harapan Bangsa, tempat di mana potensi bertemu prestasi.
        </p>
        <a href="{{ route('profil') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-transform transform hover:scale-105 animate-bounce">
            Jelajahi Profil Kami
        </a>
    </div>
</section>

<!-- ===== 2. SAMBUTAN KEPALA SEKOLAH ===== -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/3">
                <img src="{{ asset('images/kepala-sekolah.jpg') }}" alt="Kepala Sekolah" class="rounded-lg shadow-2xl w-full">
            </div>
            <div class="md:w-2/3">
                <h4 class="text-sm font-bold text-blue-600 uppercase mb-2">SAMBUTAN HANGAT</h4>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Dari Kepala Sekolah</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    "Kami berkomitmen untuk menyediakan lingkungan belajar yang inspiratif dan mendukung, di mana setiap siswa dapat tumbuh secara akademis, sosial, dan emosional. Di SMA Harapan Bangsa, kami tidak hanya mengejar keunggulan akademis, tetapi juga membentuk karakter yang kuat dan berintegritas."
                </p>
                <p class="font-bold text-gray-800">Drs. Budi Santoso, M.Pd.</p>
                <p class="text-gray-500">Kepala Sekolah SMA Harapan Bangsa</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== 3. FITUR UNGGULAN ===== -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Mengapa Memilih Kami?</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">Fokus kami adalah memberikan pengalaman pendidikan terbaik melalui pilar-pilar utama kami.</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow transform hover:-translate-y-2">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zM12 14l-9 5h18l-9-5zM12 14v7"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Kurikulum Adaptif</h3>
                <p class="text-gray-600">Mengimplementasikan Kurikulum Merdeka yang relevan dengan tuntutan zaman.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow transform hover:-translate-y-2">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m12.728 0l-.707.707M12 21v-1m-6.364-1.636l.707-.707m12.728 0l.707-.707"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3a9 9 0 100 18 9 9 0 000-18z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Ekstrakurikuler Berprestasi</h3>
                <p class="text-gray-600">Wadah pengembangan bakat di bidang olahraga, seni, dan sains.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg hover:shadow-xl transition-shadow transform hover:-translate-y-2">
                <div class="bg-blue-100 text-blue-600 rounded-full h-16 w-16 flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5h4v5h-4z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Fasilitas Modern</h3>
                <p class="text-gray-600">Laboratorium, perpustakaan digital, dan sarana olahraga standar nasional.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== 4. BERITA TERBARU (DINAMIS) ===== -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Info & Berita Sekolah</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @forelse ($beritaTerbaru as $item)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden group">
                    <a href="{{ route('berita.show', $item) }}">
                        <img src="{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('images/berita-placeholder.jpg') }}" alt="{{ $item->judul }}" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                    </a>
                    <div class="p-6">
                        <p class="text-sm text-gray-500 mb-2">{{ $item->created_at->format('d F Y') }}</p>
                        <h3 class="text-xl font-bold mb-3 hover:text-blue-600 transition-colors">
                            <a href="{{ route('berita.show', $item) }}">{{ $item->judul }}</a>
                        </h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit(strip_tags($item->konten), 100) }}</p>
                        <a href="{{ route('berita.show', $item) }}" class="font-semibold text-blue-600 hover:underline">Baca Selengkapnya →</a>
                    </div>
                </div>
            @empty
                <p class="col-span-3 text-center text-gray-500">Belum ada berita yang dipublikasikan.</p>
            @endforelse

        </div>
        <div class="text-center mt-12">
            <a href="{{ route('berita') }}" class="bg-gray-800 hover:bg-gray-900 text-white font-bold py-3 px-8 rounded-full text-lg transition-transform transform hover:scale-105">
                Lihat Semua Berita
            </a>
        </div>
    </div>
</section>

@endsection