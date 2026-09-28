<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk - TechHouse</title>
</head>
<body>
    <h2>Sistem Inventaris TechHouse</h2>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <hr>

    <h3>Tambah Barang Baru</h3>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/products" method="POST">
        @csrf
        <div>
            <label>Kode Barang:</label>
            <input type="text" name="code" placeholder="PRD-001" required>
        </div>
        <br>
        <div>
            <label>Nama Barang:</label>
            <input type="text" name="name" required>
        </div>
        <br>
        <div>
            <label>Harga:</label>
            <input type="number" name="price" required>
        </div>
        <br>
        <div>
            <label>Stok:</label>
            <input type="number" name="stock" required>
        </div>
        <br>
        <button type="submit">Simpan Barang</button>
    </form>

    <hr>

    <h3>Daftar Stok Produk</h3>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data barang.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>