@extends('layouts.app')

@section('title', 'Tambah Barang Penjualan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tambah Barang Penjualan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('barangpenjualans.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold" for="id_penjualan">ID Penjualan</label>
                            <input type="number" 
                                   id="id_penjualan" 
                                   name="id_penjualan" 
                                   value="{{ old('id_penjualan') }}" 
                                   class="form-control @error('id_penjualan') is-invalid @enderror" 
                                   placeholder="ID Penjualan">
                            @error('id_penjualan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="id_produk">ID Produk</label>
                            <input type="number" 
                                   id="id_produk" 
                                   name="id_produk" 
                                   value="{{ old('id_produk') }}" 
                                   class="form-control @error('id_produk') is-invalid @enderror" 
                                   placeholder="ID Produk">
                            @error('id_produk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="jumlah">Jumlah</label>
                            <input type="number" 
                                   id="jumlah" 
                                   name="jumlah" 
                                   value="{{ old('jumlah') }}" 
                                   class="form-control @error('jumlah') is-invalid @enderror" 
                                   placeholder="Jumlah">
                            @error('jumlah')
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

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
