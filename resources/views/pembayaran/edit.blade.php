@extends('layouts.app')

@section('title', 'Edit Pembayaran')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Edit Pembayaran</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('pembayarans.update', $pembayaran->id_pembayaran) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold" for="id_user">ID User</label>
                            <input type="number" 
                                   id="id_user" 
                                   name="id_user" 
                                   value="{{ old('id_user', $pembayaran->id_user) }}" 
                                   class="form-control @error('id_user') is-invalid @enderror" 
                                   placeholder="ID User">
                            @error('id_user')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="id_transaksi">ID Transaksi</label>
                            <input type="number" 
                                   id="id_transaksi" 
                                   name="id_transaksi" 
                                   value="{{ old('id_transaksi', $pembayaran->id_transaksi) }}" 
                                   class="form-control @error('id_transaksi') is-invalid @enderror" 
                                   placeholder="ID Transaksi">
                            @error('id_transaksi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="tanggal_pembayaran">Tanggal Pembayaran</label>
                            <input type="date" 
                                   id="tanggal_pembayaran" 
                                   name="tanggal_pembayaran" 
                                   value="{{ old('tanggal_pembayaran', $pembayaran->tanggal_pembayaran) }}" 
                                   class="form-control @error('tanggal_pembayaran') is-invalid @enderror" 
                                   placeholder="Tanggal Pembayaran">
                            @error('tanggal_pembayaran')
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
                                   value="{{ old('jumlah', $pembayaran->jumlah) }}" 
                                   class="form-control @error('jumlah') is-invalid @enderror" 
                                   placeholder="Jumlah">
                            @error('jumlah')
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
                                      placeholder="Keterangan">{{ old('keterangan', $pembayaran->keterangan) }}</textarea>
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
