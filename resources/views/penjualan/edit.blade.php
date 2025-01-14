@extends('layouts.app')

@section('title', 'Edit Penjualan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Edit Penjualan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('penjualans.update', $penjualan->id_penjualan) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold" for="id_user">ID User</label>
                            <input type="number" 
                                   id="id_user" 
                                   name="id_user" 
                                   value="{{ old('id_user', $penjualan->id_user) }}" 
                                   class="form-control @error('id_user') is-invalid @enderror" 
                                   placeholder="ID User">
                            @error('id_user')
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
                                   value="{{ old('id_produk', $penjualan->id_produk) }}" 
                                   class="form-control @error('id_produk') is-invalid @enderror" 
                                   placeholder="ID Produk">
                            @error('id_produk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="tanggal_penjualan">Tanggal Penjualan</label>
                            <input type="date" 
                                   id="tanggal_penjualan" 
                                   name="tanggal_penjualan" 
                                   value="{{ old('tanggal_penjualan', $penjualan->tanggal_penjualan) }}" 
                                   class="form-control @error('tanggal_penjualan') is-invalid @enderror" 
                                   placeholder="Tanggal Penjualan">
                            @error('tanggal_penjualan')
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
                                   value="{{ old('jumlah', $penjualan->jumlah) }}" 
                                   class="form-control @error('jumlah') is-invalid @enderror" 
                                   placeholder="Jumlah">
                            @error('jumlah')
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
                                   value="{{ old('total_harga', $penjualan->total_harga) }}" 
                                   class="form-control @error('total_harga') is-invalid @enderror" 
                                   placeholder="Total Harga">
                            @error('total_harga')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="keterangan">Keterangan</label>
                            <textarea id="keterangan" 
                                      name="keterangan" 
                                      rows="4" 
                                      class="form-control @error('keterangan') is-invalid @enderror" 
                                      placeholder="Keterangan">{{ old('keterangan', $penjualan->keterangan) }}</textarea>
                            @error('keterangan')
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
