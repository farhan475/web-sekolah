@extends('layouts.public')

@section('title', 'Beranda - SMKN 64 Jakarta')

@section('content')

<section class="relative h-screen flex items-center justify-center text-white">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/smkn64-jkt.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 text-center px-6">
        <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-4 animate-fade-in-down">
            SMK Negeri 64 Jakarta
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-3xl mx-auto animate-fade-in-up">
            Pusat Keunggulan Teknologi dan Rekayasa, Membangun Generasi Kreatif dan Inovatif.
        </p>
        <a href="{{ route('profil') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full text-lg transition-transform transform hover:scale-105 animate-bounce">
            Jelajahi Profil Kami
        </a>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/3">
                <img src="{{ asset('images/kepala-sekolah.jpeg') }}" alt="Kepala Sekolah SMKN 64 Jakarta" class="rounded-lg shadow-2xl w-full">
            </div>
            <div class="md:w-2/3">
                <h4 class="text-sm font-bold text-blue-600 uppercase mb-2">SAMBUTAN HANGAT</h4>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Dari Kepala Sekolah</h2>
                <p class="text-gray-600 mb-4 leading-relaxed">
                    "Sebagai lembaga pendidikan, SMKN 64 Jakarta tanggap dengan perkembangan teknologi tersebut. Dengan dukungan SDM yang dimiliki, sekolah ini siap untuk berkompetisi dengan sekolah lain dalam pelayanan informasi publik. Teknologi Informasi Web khususnya, menjadi sarana bagi SMK Negeri 64 Jakarta untuk memberi pelayanan informasi secara cepat, jelas, dan akuntabel. Dari layanan ini pula, sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab Kebutuhan masyarakat."
                </p>
                <p class="font-bold text-gray-800">Dewi Puspitasari, S.ST.Par, M.Par</p>
                <p class="text-gray-500">Kepala Sekolah SMK Negeri 64 Jakarta</p>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Program Keahlian Unggulan</h2>
        <p class="text-gray-600 max-w-2xl mx-auto mb-12">Kami fokus pada program keahlian di bidang teknologi yang sangat dibutuhkan oleh industri saat ini dan di masa depan.</p>
        <div class="flex flex-wrap justify-center gap-8">

            <div class="w-full md:w-1/3 lg:w-1/4 bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                <img src="{{ asset('images/Rpl.jpg') }}" alt="Rekayasa Perangkat Lunak" class="w-full h-48 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold mb-2">Rekayasa Perangkat Lunak</h3>
                    <p class="text-gray-600">Mempelajari pengembangan aplikasi web, mobile, dan desktop dengan teknologi terkini.</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 lg:w-1/4 bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300">
                <img src="{{ asset('images/Rpl.jpg') }}" alt="Desain Komunikasi Visual" class="w-full h-48 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold mb-2">Desain Komunikasi Visual</h3>
                    <p class="text-gray-600">Menguasai prinsip desain grafis, tipografi, dan multimedia untuk komunikasi visual yang efektif.</p>
                </div>
            </div>

        </div>
    </div>
</section>

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

@push('scripts')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha521-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@endsection