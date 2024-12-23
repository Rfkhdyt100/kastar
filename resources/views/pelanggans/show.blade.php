@extends('layouts.app')

@section('title', 'Detail Pelanggan')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Detail Pelanggan</h3>
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $pelanggan->nama_pelanggan }}</p>
            <p><strong>Email:</strong> {{ $pelanggan->email }}</p>
            <p><strong>Telepon:</strong> {{ $pelanggan->telepon }}</p>
            <p><strong>Alamat:</strong> {{ $pelanggan->alamat }}</p>
            <p><strong>Terdaftar:</strong> {{ $pelanggan->created_at->format('d M Y H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('pelanggans.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection