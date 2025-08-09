@extends('layouts.public')

@section('title', 'Kontak - SMK Negeri 64 Jakarta')

@section('content')

<section class="relative h-[300px] md:h-[400px] flex items-center justify-center text-white">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/smkn64-jkt.jpg') }}');"></div>
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 text-center px-6">
        <h1 class="text-4xl md:text-5xl font-bold">Hubungi Kami</h1>
        <p class="text-lg md:text-xl text-gray-200 mt-2">Kami siap mendengar dari Anda.</p>
    </div>
</section>

<div class="py-20 bg-white">
    <div class="container mx-auto px-6">
        
        @if (session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-8 rounded-lg shadow-md" role="alert">
                <p class="font-bold">Terima Kasih!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-8 rounded-lg shadow-md" role="alert">
                <p class="font-bold">Oops! Terjadi kesalahan:</p>
                <ul class="list-disc list-inside mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            
            <div class="space-y-8">
                
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-200">
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Informasi Kontak</h2>
                    <div class="space-y-4 text-gray-700">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt text-blue-600 mt-1 mr-4 w-5 text-center"></i>
                            <div>
                                <h3 class="font-bold">Alamat</h3>
                                <p>Jl. Mpok Nori, RT.9/RW.3, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, DKI Jakarta 13890</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <i class="fas fa-envelope text-blue-600 mt-1 mr-4 w-5 text-center"></i>
                            <div>
                                <h3 class="font-bold">Email</h3>
                                <p>info@smkn64-jkt.sch.id / info.smkn64jkt@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                             <i class="fas fa-phone text-blue-600 mt-1 mr-4 w-5 text-center"></i>
                            <div>
                                <h3 class="font-bold">Telepon (PPDB)</h3>
                                <p>08978891895 (Hilal) / 081212001521 (Agus)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-bold mb-4 text-gray-800">Lokasi Kami</h2>
                    <div class="rounded-lg overflow-hidden shadow-lg border border-gray-200">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.674777385557!2d106.91055202499106!3d-6.3063898936828435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6993005e0dd0e5%3A0xb2588e45817cf136!2sSMK%20Negeri%2064%20Jakarta!5e0!3m2!1sen!2sid!4v1753975843312!5m2!1sen!2sid"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            <div class="bg-gray-50 p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>

                <form action="{{ route('kontak.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700 font-semibold mb-2">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('nama') }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Alamat Email</label>
                        <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="subjek" class="block text-gray-700 font-semibold mb-2">Subjek</label>
                        <input type="text" id="subjek" name="subjek" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ old('subjek') }}" required>
                    </div>
                    <div class="mb-6">
                        <label for="isi_pesan" class="block text-gray-700 font-semibold mb-2">Pesan</label>
                        <textarea id="isi_pesan" name="isi_pesan" rows="5" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ old('isi_pesan') }}</textarea>
                    </div>
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