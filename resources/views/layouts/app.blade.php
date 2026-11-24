
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Inventaris Barang</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            margin: 0;
            color: #333;
        }

        header {
            background: #263b55;
            color: white;
            padding: 20px 40px;
        }

        header h2 {
            margin: 0;
        }

        nav {
            background: white;
            padding: 15px 40px;
            border-bottom: 1px solid #ddd;
        }

        nav a {
            text-decoration: none;
            color: #263b55;
            margin-right: 20px;
        }

        main {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
            min-height: 400px;
        }

        .container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 6px #ddd;
        }

        h3 {
            margin-top: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #e8edf3;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button, .btn {
            background: #263b55;
            color: white;
            padding: 9px 14px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            display: inline-block;
        }

        .btn-danger {
            background: #dc3545;
        }

        .btn-secondary {
            background: #6c757d;
        }

        .pesan {
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 5px;
            background: #d4edda;
            color: #155724;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
        }

        footer {
            background: #263b55;
            color: white;
            text-align: center;
            padding: 18px;
            margin-top: 30px;
        }
    </style>
</head>
<body>

    <header>
        <h2>Aplikasi Inventaris Barang</h2>
        <p>Pengelolaan Data Inventaris</p>
    </header>

    <nav>
        <a href="{{ route('example.index') }}">Daftar Barang</a>
        <a href="{{ route('example.create') }}">Tambah Barang</a>
    </nav>

    <main>
        @if (session('success'))
            <div class="pesan">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="pesan error">
                {{ session('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="pesan error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>

    <footer>
        <p>&copy; 2026 Aplikasi Inventaris Barang</p>
    </footer>

</body>
</html>
