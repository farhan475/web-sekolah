  @extends('layouts.app')

    @section('title', 'Dashboard')

    @section('content')
    <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
            @auth
                <span>Selamat Datang, <span class="font-semibold">{{ Auth::user()->name }}</span></span>
            @endauth
        <p>Anda telah berhasil login.</p>

        <form action="{{ route('logout') }}" method="POST" class="mt-6">
            @csrf
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Logout
            </button>
        </form>
    </div>
    @endsection