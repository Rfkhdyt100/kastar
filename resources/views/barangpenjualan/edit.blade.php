@extends('layouts.app')

@section('title', 'Edit Barang Penjualan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Edit Barang Penjualan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('barang_penjualans.update', $barangPenjualan->id_barang_penjualan) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold" for="id_penjualan">ID Penjualan</label>
                            <input type="number" 
                                   id="id_penjualan" 
                                   name="id_penjualan" 
                                   value="{{ old('id_penjualan', $barangPenjualan->id_penjualan) }}" 
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
                                   value="{{ old('id_produk', $barangPenjualan->id_produk) }}" 
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
                                   value="{{ old('jumlah', $barangPenjualan->jumlah) }}" 
                                   class="form-control @error('jumlah') is-invalid @enderror" 
                                   placeholder="Jumlah">
                            @error('jumlah')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="harga_satuan">Harga Satuan</label>
                            <input type="number" 
                                   id="harga_satuan" 
                                   name="harga_satuan" 
                                   value="{{ old('harga_satuan', $barangPenjualan->harga_satuan) }}" 
                                   class="form-control @error('harga_satuan') is-invalid @enderror" 
                                   placeholder="Harga Satuan">
                            @error('harga_satuan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="total_harga">Total Harga</label>
                            <input type="number" 
                                   id="total_harga" 
                                   name="total_harga" 
                                   value="{{ old('total_harga', $barangPenjualan->total_harga) }}" 
                                   class="form-control @error('total_harga') is-invalid @enderror" 
                                   placeholder="Total Harga">
                            @error('total_harga')
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
