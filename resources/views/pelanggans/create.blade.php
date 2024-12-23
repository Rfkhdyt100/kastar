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
        <h2>Tambah Pelanggan</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pelanggans.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold" for="nama_pelanggan">Nama Pelanggan</label>
                                <input type="text" 
                                       id="nama_pelanggan" 
                                       name="nama_pelanggan" 
                                       value="{{ old('nama_pelanggan') }}" 
                                       class="form-control @error('nama_pelanggan') is-invalid @enderror" 
                                       placeholder="Nama Pelanggan">
                                @error('nama_pelanggan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold" for="email">Email</label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       class="form-control @error('email') is-invalid @enderror" 
                                       placeholder="Email">
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold" for="telepon">Nomor Telepon</label>
                                <input type="text" 
                                       id="telepon" 
                                       name="telepon" 
                                       value="{{ old('telepon') }}" 
                                       class="form-control @error('telepon') is-invalid @enderror" 
                                       placeholder="Nomor Telepon">
                                @error('telepon')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold" for="alamat">Alamat</label>
                                <textarea id="alamat" 
                                          name="alamat" 
                                          rows="4" 
                                          class="form-control @error('alamat') is-invalid @enderror" 
                                          placeholder="Alamat">{{ old('alamat') }}</textarea>
                                @error('alamat')
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
