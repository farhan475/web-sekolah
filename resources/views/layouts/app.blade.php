 <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Website Sekolah')</title>
        <!-- Kita bisa menggunakan CDN untuk styling cepat -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto mt-10">
            @yield('content')
        </div>
    </body>
    </html>