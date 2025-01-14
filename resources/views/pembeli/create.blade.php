@extends('layouts.app')

@section('title', 'Tambah Pembeli')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tambah Pembeli</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('pembelis.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold" for="custumor">Custumor</label>
                            <input type="text" 
                                   id="custumor" 
                                   name="custumor" 
                                   value="{{ old('custumor') }}" 
                                   class="form-control @error('custumor') is-invalid @enderror" 
                                   placeholder="Custumor">
                            @error('custumor')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="tanggal_beli">Tanggal Beli</label>
                            <input type="date" 
                                   id="tanggal_beli" 
                                   name="tanggal_beli" 
                                   value="{{ old('tanggal_beli') }}" 
                                   class="form-control @error('tanggal_beli') is-invalid @enderror" 
                                   placeholder="Tanggal Beli">
                            @error('tanggal_beli')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="waktu_beli">Waktu Beli</label>
                            <input type="time" 
                                   id="waktu_beli" 
                                   name="waktu_beli" 
                                   value="{{ old('waktu_beli') }}" 
                                   class="form-control @error('waktu_beli') is-invalid @enderror" 
                                   placeholder="Waktu Beli">
                            @error('waktu_beli')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="metode_pembayaran">Metode Pembayaran</label>
                            <input type="text" 
                                   id="metode_pembayaran" 
                                   name="metode_pembayaran" 
                                   value="{{ old('metode_pembayaran') }}" 
                                   class="form-control @error('metode_pembayaran') is-invalid @enderror" 
                                   placeholder="Metode Pembayaran">
                            @error('metode_pembayaran')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="produk">Produk</label>
                            <input type="number" 
                                   id="produk" 
                                   name="produk" 
                                   value="{{ old('produk') }}" 
                                   class="form-control @error('produk') is-invalid @enderror" 
                                   placeholder="Produk">
                            @error('produk')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="bayar">Bayar</label>
                            <input type="number" 
                                   id="bayar" 
                                   name="bayar" 
                                   value="{{ old('bayar') }}" 
                                   class="form-control @error('bayar') is-invalid @enderror" 
                                   placeholder="Bayar">
                            @error('bayar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="kembali">Kembali</label>
                            <input type="number" 
                                   id="kembali" 
                                   name="kembali" 
                                   value="{{ old('kembali') }}" 
                                   class="form-control @error('kembali') is-invalid @enderror" 
                                   placeholder="Kembali">
                            @error('kembali')
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
