@extends('layouts.app')

@section('title', 'Daftar Pembeli')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar Pembeli</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('pembelis.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PEMBELI</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Custumor</th>
                                <th scope="col">Tanggal Beli</th>
                                <th scope="col">Waktu Beli</th>
                                <th scope="col">Metode Pembayaran</th>
                                <th scope="col">Produk</th>
                                <th scope="col">Bayar</th>
                                <th scope="col">Kembali</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pembelis as $pembeli)
                                <tr>
                                    <td>{{ $pembeli->id_pembeli }}</td>
                                    <td>{{ $pembeli->custumor }}</td>
                                    <td>{{ $pembeli->tanggal_beli }}</td>
                                    <td>{{ $pembeli->waktu_beli }}</td>
                                    <td>{{ $pembeli->metode_pembayaran }}</td>
                                    <td>{{ $pembeli->produk->nama_produk }}</td>
                                    <td>{{ $pembeli->bayar }}</td>
                                    <td>{{ $pembeli->kembali }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('pembelis.destroy', $pembeli->id_pembeli) }}" 
                                              method="POST">
                                            <a href="{{ route('pembelis.edit', $pembeli->id_pembeli) }}" 
                                               class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <div class="alert alert-danger">
                                            Data Pembeli belum Tersedia.
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
