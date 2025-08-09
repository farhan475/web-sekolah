    @extends('layouts.app') 

    @section('title', 'Dashboard Admin') 

    @section('content')
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h1>

        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <h2 class="text-xl font-semibold text-gray-800">Selamat Datang, {{ auth()->user()->name }}!</h2>
            <p class="text-gray-600 mt-2">Anda telah berhasil login ke Panel Admin. Dari sini, Anda dapat mengelola konten website sekolah.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-8">
            
            <a href="{{ route('admin.berita.index') }}" class="block bg-white rounded-lg shadow-lg p-6 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
            <div class="flex items-center justify-center mb-4">
                <div class="bg-sky-100 p-4 rounded-full">
                    <i class="fas fa-newspaper text-3xl text-sky-600"></i>
                </div>
            </div>
            <h3 class="text-xl text-center font-bold text-gray-800">Kelola Berita</h3>
            <p class="text-gray-600 text-center mt-2">Tambah, edit, atau hapus artikel dan pengumuman sekolah.</p>
        </a>

            <div class="relative bg-white rounded-lg shadow-lg p-6 opacity-50 cursor-not-allowed">
                <div class="absolute top-2 right-2 bg-gray-500 text-white text-xs font-bold px-2 py-1 rounded-full">SEGERA</div>
                <div class="flex items-center justify-center mb-4">
                    <div class="bg-green-100 p-4 rounded-full">
                        <i class="fas fa-images text-3xl text-green-600"></i>
                    </div>
                </div>
                <h3 class="text-xl text-center font-bold text-gray-800">Galeri Foto</h3>
                <p class="text-gray-600 text-center mt-2">Kelola album foto dan dokumentasi kegiatan sekolah.</p>
            </div>

        </div>
    @endsection