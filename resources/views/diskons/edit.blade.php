@extends('layouts.app')

@section('title', 'Edit Diskon')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Edit Diskon</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('diskons.update', $diskon->id_diskon) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold" for="nama_diskon">Nama Diskon</label>
                            <input type="text" 
                                   id="nama_diskon" 
                                   name="nama_diskon" 
                                   value="{{ old('nama_diskon', $diskon->nama_diskon) }}" 
                                   class="form-control @error('nama_diskon') is-invalid @enderror" 
                                   placeholder="Nama Diskon">
                            @error('nama_diskon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="persentase_diskon">Persentase Diskon</label>
                            <input type="number" 
                                   id="persentase_diskon" 
                                   name="persentase_diskon" 
                                   value="{{ old('persentase_diskon', $diskon->persentase_diskon) }}" 
                                   class="form-control @error('persentase_diskon') is-invalid @enderror" 
                                   placeholder="Persentase Diskon">
                            @error('persentase_diskon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="tanggal_mulai_diskon">Tanggal Mulai Diskon</label>
                            <input type="date" 
                                   id="tanggal_mulai_diskon" 
                                   name="tanggal_mulai_diskon" 
                                   value="{{ old('tanggal_mulai_diskon', $diskon->tanggal_mulai_diskon) }}" 
                                   class="form-control @error('tanggal_mulai_diskon') is-invalid @enderror" 
                                   placeholder="Tanggal Mulai Diskon">
                            @error('tanggal_mulai_diskon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="tanggal_berakhir_diskon">Tanggal Berakhir Diskon</label>
                            <input type="date" 
                                   id="tanggal_berakhir_diskon" 
                                   name="tanggal_berakhir_diskon" 
                                   value="{{ old('tanggal_berakhir_diskon', $diskon->tanggal_berakhir_diskon) }}" 
                                   class="form-control @error('tanggal_berakhir_diskon') is-invalid @enderror" 
                                   placeholder="Tanggal Berakhir Diskon">
                            @error('tanggal_berakhir_diskon')
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
                                   value="{{ old('id_produk', $diskon->id_produk) }}" 
                                   class="form-control @error('id_produk') is-invalid @enderror" 
                                   placeholder="ID Produk">
                            @error('id_produk')
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
