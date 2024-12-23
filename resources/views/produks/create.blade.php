<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <h2>Tambah Produk</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('produks.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold" for="nama_produk">Nama Produk</label>
                                <input type="text" 
                                       id="nama_produk" 
                                       name="nama_produk" 
                                       value="{{ old('nama_produk') }}" 
                                       class="form-control @error('nama_produk') is-invalid @enderror" 
                                       placeholder="Nama Produk">
                                @error('nama_produk')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold" for="harga">Harga</label>
                                <input type="number" 
                                       id="harga" 
                                       name="harga" 
                                       value="{{ old('harga') }}" 
                                       class="form-control @error('harga') is-invalid @enderror" 
                                       placeholder="Harga">
                                @error('harga')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold" for="stok">Stok</label>
                                <input type="number" 
                                       id="stok" 
                                       name="stok" 
                                       value="{{ old('stok') }}" 
                                       class="form-control @error('stok') is-invalid @enderror" 
                                       placeholder="Stok">
                                @error('stok')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold" for="id_kategori">ID Kategori</label>
                                <input type="number" 
                                       id="id_kategori" 
                                       name="id_kategori" 
                                       value="{{ old('id_kategori') }}" 
                                       class="form-control @error('id_kategori') is-invalid @enderror" 
                                       placeholder="ID Kategori">
                                @error('id_kategori')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
