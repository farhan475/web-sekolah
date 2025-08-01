<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold">Oops!</strong>
                            <span class="block sm:inline">Ada beberapa masalah dengan input Anda.</span>
                        </div>
                    @endif

                    <form action="{{ route('admin.berita.update', $berita) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- PENTING untuk metode update --}}

                        <!-- Judul -->
                        <div class="mb-4">
                            <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                            <input type="text" name="judul" id="judul" value="{{ old('judul', $berita->judul) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                        </div>

                        <!-- Konten -->
                        <div class="mb-4">
                            <label for="konten" class="block text-sm font-medium text-gray-700">Konten</label>
                            <textarea name="konten" id="konten" rows="10" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>{{ old('konten', $berita->konten) }}</textarea>
                        </div>

                        <!-- Gambar -->
                        <div class="mb-4">
                            <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none">
                            <p class="mt-1 text-sm text-gray-500">Kosongkan jika tidak ingin mengubah gambar.</p>
                            @if ($berita->gambar)
                                <div class="mt-4">
                                    <p class="text-sm font-medium text-gray-700 mb-2">Gambar Saat Ini:</p>
                                    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="w-48 h-auto rounded">
                                </div>
                            @endif
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="flex items-center justify-end mt-6">
                            <a href="{{ route('admin.berita.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">
                                Batal
                            </a>
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Perbarui Berita
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
