@extends('layouts.app')

@section('title', 'Tambah Stok')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tambah Stok</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('stoks.store') }}" method="POST">
                        @csrf

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
                            <label class="font-weight-bold" for="tanggal_update_stok">Tanggal Update Stok</label>
                            <input type="date" 
                                   id="tanggal_update_stok" 
                                   name="tanggal_update_stok" 
                                   value="{{ old('tanggal_update_stok') }}" 
                                   class="form-control @error('tanggal_update_stok') is-invalid @enderror" 
                                   placeholder="Tanggal Update Stok">
                            @error('tanggal_update_stok')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="stok_awal">Stok Awal</label>
                            <input type="number" 
                                   id="stok_awal" 
                                   name="stok_awal" 
                                   value="{{ old('stok_awal') }}" 
                                   class="form-control @error('stok_awal') is-invalid @enderror" 
                                   placeholder="Stok Awal">
                            @error('stok_awal')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="stok_akhir">Stok Akhir</label>
                            <input type="number" 
                                   id="stok_akhir" 
                                   name="stok_akhir" 
                                   value="{{ old('stok_akhir') }}" 
                                   class="form-control @error('stok_akhir') is-invalid @enderror" 
                                   placeholder="Stok Akhir">
                            @error('stok_akhir')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="keterangan">Keterangan</label>
                            <textarea id="keterangan" 
                                      name="keterangan" 
                                      class="form-control @error('keterangan') is-invalid @enderror" 
                                      placeholder="Keterangan">{{ old('keterangan') }}</textarea>
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
