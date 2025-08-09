<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel - Website Sekolah')</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 font-sans">
    
    <div class="flex min-h-screen">
        
        <aside class="bg-gray-800 text-white w-64 p-4 flex flex-col">
            <div>
                <div class="text-xl font-bold pb-4 border-b border-gray-700 mb-4">Admin Panel</div>
                <nav class="space-y-2">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center py-2 px-3 rounded-lg hover:bg-gray-700 {{ Request::is('admin/dashboard*') ? 'bg-blue-600' : '' }}">
                        <i class="fas fa-fw fa-tachometer-alt mr-3"></i>Dashboard
                    </a>
                    <a href="{{ route('admin.berita.index') }}" class="flex items-center py-2 px-3 rounded-lg hover:bg-gray-700 {{ Request::is('admin/berita*') ? 'bg-blue-600' : '' }}">
                        <i class="fas fa-fw fa-newspaper mr-3"></i>Kelola Berita
                    </a>
                    <a href="{{ route('admin.pesan.index') }}" class="flex items-center py-2 px-3 rounded-lg hover:bg-gray-700 {{ Request::is('admin/pesan*') ? 'bg-blue-600' : '' }}">
        <i class="fas fa-fw fa-envelope mr-3"></i>Pesan Masuk
    </a>
                </nav>
            </div>
            <div class="mt-auto pt-4 border-t border-gray-700">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center p-2 rounded-lg hover:bg-red-700 bg-red-600 text-white">
                        <i class="fas fa-sign-out-alt mr-2"></i>Logout
                    </button>
                </form>
            </div>
        </aside>

        <div class="flex-1 flex flex-col">
            <header class="bg-white shadow-sm py-4 px-6 flex justify-end items-center">
                <div class="text-gray-600">
                    Selamat Datang, <span class="font-semibold">{{ Auth::user()->name ?? 'Admin' }}</span>
                </div>
            </header>
            <main class="p-6 flex-1">
                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>