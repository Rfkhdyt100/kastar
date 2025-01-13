@extends('layouts.app')

@section('title', 'Tambah Shift')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Tambah Shift</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('shifts.store') }}" method="POST">
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
                            <label class="font-weight-bold" for="tanggal_mulai">Tanggal Mulai</label>
                            <input type="date" 
                                   id="tanggal_mulai" 
                                   name="tanggal_mulai" 
                                   value="{{ old('tanggal_mulai') }}" 
                                   class="form-control @error('tanggal_mulai') is-invalid @enderror" 
                                   placeholder="Tanggal Mulai">
                            @error('tanggal_mulai')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="waktu_mulai">Waktu Mulai</label>
                            <input type="time" 
                                   id="waktu_mulai" 
                                   name="waktu_mulai" 
                                   value="{{ old('waktu_mulai') }}" 
                                   class="form-control @error('waktu_mulai') is-invalid @enderror" 
                                   placeholder="Waktu Mulai">
                            @error('waktu_mulai')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold" for="waktu_selesai">Waktu Selesai</label>
                            <input type="time" 
                                   id="waktu_selesai" 
                                   name="waktu_selesai" 
                                   value="{{ old('waktu_selesai') }}" 
                                   class="form-control @error('waktu_selesai') is-invalid @enderror" 
                                   placeholder="Waktu Selesai">
                            @error('waktu_selesai')
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
