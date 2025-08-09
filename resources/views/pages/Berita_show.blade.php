@extends('layouts.public')

@section('title', $berita->judul)

@section('content')
<div class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-900 leading-tight mb-4">
                {{ $berita->judul }}
            </h1>
            
            <div class="text-gray-500 mb-6">
                <span>Dipublikasikan pada {{ $berita->created_at->format('d F Y') }}</span>
            </div>

            @if($berita->gambar)
                <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-auto max-h-[500px] object-cover rounded-lg shadow-lg mb-8">
            @endif
            
            <div class="prose lg:prose-xl max-w-none text-gray-800 leading-relaxed">
                {!! $berita->konten !!}
            </div>

            <div class="mt-12 border-t pt-8">
                <a href="{{ route('berita') }}" class="text-blue-600 hover:underline">← Kembali ke Daftar Berita</a>
            </div>
        </div>
    </div>
</div>
@endsection