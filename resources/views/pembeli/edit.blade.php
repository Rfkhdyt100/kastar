@extends('layouts.app')

@section('title', 'Edit Pembeli')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Edit Pembeli</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('pembelis.update', $pembeli->id_pembeli) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold" for="nama_pembeli">Nama Pembeli</label>
                            <input type="text" 
                                   id="nama_pembeli" 
                                   name="nama_pembeli" 
                                   value="{{ old('nama_pembeli', $pembeli->nama_pembeli) }}" 
                                   class="form-control @error('nama_pembeli') is-invalid @enderror" 
                                   placeholder="Nama Pembeli">
                            @error('nama_pembeli')
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
                                   value="{{ old('email', $pembeli->email) }}" 
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
                                   value="{{ old('telepon', $pembeli->telepon) }}" 
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
                                      placeholder="Alamat">{{ old('alamat', $pembeli->alamat) }}</textarea>
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
