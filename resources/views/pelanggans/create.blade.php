@extends('layouts.app')

@section('title', 'Tambah Pelanggan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tambah Pelanggan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('pelanggans.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold" for="nama_pelanggan">Nama Pelanggan</label>
                            <input type="text" 
                                   id="nama_pelanggan" 
                                   name="nama_pelanggan" 
                                   value="{{ old('nama_pelanggan') }}" 
                                   class="form-control @error('nama_pelanggan') is-invalid @enderror" 
                                   placeholder="Nama Pelanggan">
                            @error('nama_pelanggan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   value="{{ old('email') }}" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   placeholder="Email">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="telepon">Nomor Telepon</label>
                            <input type="text" 
                                   id="telepon" 
                                   name="telepon" 
                                   value="{{ old('telepon') }}" 
                                   class="form-control @error('telepon') is-invalid @enderror" 
                                   placeholder="Nomor Telepon">
                            @error('telepon')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="alamat">Alamat</label>
                            <textarea id="alamat" 
                                      name="alamat" 
                                      rows="4" 
                                      class="form-control @error('alamat') is-invalid @enderror" 
                                      placeholder="Alamat">{{ old('alamat') }}</textarea>
                            @error('alamat')
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
