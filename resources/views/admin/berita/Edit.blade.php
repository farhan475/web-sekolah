@extends('layouts.app')

@section('title', 'Edit Berita')

@section('content')
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Edit Berita</h1>

    <div class="bg-white shadow-md rounded-lg p-6">
        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
                <p class="font-bold">Oops! Ada beberapa masalah dengan input Anda:</p>
                <ul class="list-disc list-inside mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') 

            <div class="mb-4">
                <label for="judul" class="block text-sm font-medium text-gray-700 mb-2">Judul</label>
                <input type="text" name="judul" id="judul" value="{{ old('judul', $berita->judul) }}" class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <div class="mb-4">
                <label for="konten" class="block text-sm font-medium text-gray-700 mb-2">Konten</label>
                <textarea name="konten" id="konten" rows="10" class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>{{ old('konten', $berita->konten) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="gambar" class="block text-sm font-medium text-gray-700 mb-2">Ganti Gambar</label>
                
                @if ($berita->gambar)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita Saat Ini" class="w-48 h-auto rounded border">
                        <p class="mt-1 text-xs text-gray-500">Gambar saat ini.</p>
                    </div>
                @endif

                <input type="file" name="gambar" id="gambar" class="w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                <p class="mt-1 text-sm text-gray-500">Kosongkan jika tidak ingin mengubah gambar. Tipe: JPG, PNG, GIF. Maks: 2MB.</p>
            </div>

            <div class="flex items-center justify-end mt-6">
                <a href="{{ route('admin.berita.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mr-2">
                    Batal
                </a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Perbarui Berita
                </button>
            </div>
        </form>
    </div>
@endsection