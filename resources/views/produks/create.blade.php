@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tambah Produk</h3>
                <hr>
            </div>
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
@endsection
