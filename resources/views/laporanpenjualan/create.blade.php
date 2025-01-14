@extends('layouts.app')

@section('title', 'Tambah Laporan Penjualan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tambah Laporan Penjualan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('laporan_penjualans.store') }}" method="POST">
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
                            <label class="font-weight-bold" for="tanggal_laporan">Tanggal Laporan</label>
                            <input type="date" 
                                   id="tanggal_laporan" 
                                   name="tanggal_laporan" 
                                   value="{{ old('tanggal_laporan') }}" 
                                   class="form-control @error('tanggal_laporan') is-invalid @enderror" 
                                   placeholder="Tanggal Laporan">
                            @error('tanggal_laporan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="total_pendapatan_laporan">Total Pendapatan</label>
                            <input type="number" 
                                   id="total_pendapatan_laporan" 
                                   name="total_pendapatan_laporan" 
                                   value="{{ old('total_pendapatan_laporan') }}" 
                                   class="form-control @error('total_pendapatan_laporan') is-invalid @enderror" 
                                   placeholder="Total Pendapatan">
                            @error('total_pendapatan_laporan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="jumlah_transaksi_laporan">Jumlah Transaksi</label>
                            <input type="number" 
                                   id="jumlah_transaksi_laporan" 
                                   name="jumlah_transaksi_laporan" 
                                   value="{{ old('jumlah_transaksi_laporan') }}" 
                                   class="form-control @error('jumlah_transaksi_laporan') is-invalid @enderror" 
                                   placeholder="Jumlah Transaksi">
                            @error('jumlah_transaksi_laporan')
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
