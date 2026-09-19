<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mengisi Judul Secara Dinamis -->
    <title>@yield('title') - Aplikasi Web Saya</title>
    <!-- Style sederhana untuk demo -->
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        nav { background: #1e293b; color: white; padding: 15px; }
        main { padding: 20px; }
        footer { background: #f1f5f9; text-align: center; padding: 10px; margin-top: 20px; }
    </style>
</head>
<body>

    <!-- 1. Menyiapkan Navbar Induk -->
    <nav>
        <strong>Portal Laravel</strong> | 
        <a href="/test-posts" style="color:white;">Semua Post</a>
    </nav>

    <!-- 2. Placeholder untuk Konten Utama -->
    <main>
        @yield('content')
    </main>

    <!-- 3. Footer Induk -->
    <footer>
        <p>&copy; 2026 Pemrograman Web - Universitas Singaperbangsa Karawang</p>
    </footer>

</body>
</html>