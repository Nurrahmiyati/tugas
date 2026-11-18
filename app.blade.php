<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Saya')</title>
    <!-- Kita pakai sedikit CSS murni untuk merapikan tampilan dasar -->
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f9f9f9; }
        .navbar { background-color: #333; color: white; padding: 15px; margin-bottom: 20px; border-radius: 5px;}
        .container { background-color: white; padding: 20px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);}
    </style>
</head>
<body>

    <div class="navbar">
        <strong>Website Toko Saya</strong>
    </div>

    <div class="container">
        <!-- Bagian ini akan diisi oleh kode dari file lain -->
        @yield('content')
    </div>

</body>
</html>