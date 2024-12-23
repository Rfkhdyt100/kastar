<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk - Kasir Pintar</title>
    <style>
        .container {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .btn {
            padding: 8px 15px;
            text-decoration: none;
            display: inline-block;
            margin: 2px;
            border-radius: 3px;
            cursor: pointer;
            border: none;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
        }
        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }
        .error-message {
            color: #dc3545;
            font-size: 0.9em;
            margin-top: -8px;
            margin-bottom: 10px;
        }
        .is-invalid {
            border-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Produk</h1>

        <form action="{{ route('produks.update', $produk->id_produk) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" 
                       id="nama_produk" 
                       name="nama_produk" 
                       value="{{ old('nama_produk', $produk->nama_produk) }}" 
                       class="@error('nama_produk') is-invalid @enderror">
                @error('nama_produk')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" 
                       id="harga" 
                       name="harga" 
                       value="{{ old('harga', $produk->harga) }}" 
                       class="@error('harga') is-invalid @enderror">
                @error('harga')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="number" 
                       id="stok" 
                       name="stok" 
                       value="{{ old('stok', $produk->stok) }}" 
                       class="@error('stok') is-invalid @enderror">
                @error('stok')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="id_kategori">ID Kategori</label>
                <input type="number" 
                       id="id_kategori" 
                       name="id_kategori" 
                       value="{{ old('id_kategori', $produk->id_kategori) }}" 
                       class="@error('id_kategori') is-invalid @enderror">
                @error('id_kategori')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Produk</button>
                <a href="{{ route('produks.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
