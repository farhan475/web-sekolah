@extends('layouts.public')

@section('title', 'Berita Sekolah')

@section('content')

<section class="relative h-[300px] md:h-[400px] flex items-center justify-center text-white">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/smkn64-jkt.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 text-center px-6">
        <h1 class="text-4xl md:text-5xl font-bold">Berita & Informasi</h1>
        <p class="text-lg md:text-xl text-gray-200 mt-2">Ikuti perkembangan terbaru dari sekolah kami.</p>
    </div>
</section>

<div class="py-20 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($semuaBerita as $item)
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
                <p class="col-span-3 text-center text-gray-500 text-xl py-10">Saat ini belum ada berita yang bisa ditampilkan.</p>
            @endforelse
        </div>

        <div class="mt-12">
            {{ $semuaBerita->links() }}
        </div>
    </div>
</div>
@endsection