@extends('layouts.app')

@section('title', 'Tambah Penjualan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tambah Penjualan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('penjualans.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold" for="id_user">ID User</label>
                            <input type="number" 
                                   id="id_user" 
                                   name="id_user" 
                                   value="{{ old('id_user') }}" 
                                   class="form-control @error('id_user') is-invalid @enderror" 
                                   placeholder="ID User">
                            @error('id_user')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="id_pelanggan">ID Pelanggan</label>
                            <input type="number" 
                                   id="id_pelanggan" 
                                   name="id_pelanggan" 
                                   value="{{ old('id_pelanggan') }}" 
                                   class="form-control @error('id_pelanggan') is-invalid @enderror" 
                                   placeholder="ID Pelanggan">
                            @error('id_pelanggan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="total_pendapatan">Total Pendapatan</label>
                            <input type="number" 
                                   id="total_pendapatan" 
                                   name="total_pendapatan" 
                                   value="{{ old('total_pendapatan') }}" 
                                   class="form-control @error('total_pendapatan') is-invalid @enderror" 
                                   placeholder="Total Pendapatan">
                            @error('total_pendapatan')
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
                                   value="{{ old('tanggal_penjualan') }}" 
                                   class="form-control @error('tanggal_penjualan') is-invalid @enderror" 
                                   placeholder="Tanggal Penjualan">
                            @error('tanggal_penjualan')
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
