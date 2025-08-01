<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
 @extends('layouts.app')

    @section('title', 'Login')

    @section('content')
    <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Login</h1>

        <!-- Menampilkan pesan error jika login gagal -->
        @error('email')
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @enderror

        <form action="{{ route('login.store') }}" method="POST">
            @csrf <!-- PENTING untuk keamanan Laravel -->

            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-semibold mb-2">Alamat Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                <input type="password" id="password" name="password" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                Login
            </button>
        </form>
        <p class="text-center mt-4">
            Belum punya akun? <a href="{{ route('register.show') }}" class="text-blue-600 hover:underline">Daftar di sini</a>
        </p>
    </div>
    @endsection
