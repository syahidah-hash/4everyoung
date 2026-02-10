<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'App' }}</title>
</head>
<body>

    <nav>
        <div>
            <h1>Koperasi JTI</h1>
            <a href="/users">Pengguna</a>
            <a href="/savings">Simpanan</a>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>
