@extends('layouts.app')

@section('title', 'Daftar Barang Penjualan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar Barang Penjualan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('barangpenjualans.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BARANG PENJUALAN</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID Penjualan</th>
                                <th scope="col">ID Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($barangpenjualans as $barangpenjualan)
                                <tr>
                                    <td>{{ $barangpenjualan->id_barangpenjualan }}</td>
                                    <td>{{ $barangpenjualan->id_penjualan }}</td>
                                    <td>{{ $barangpenjualan->id_produk }}</td>
                                    <td>{{ $barangpenjualan->jumlah }}</td>
                                    <td>{{ $barangpenjualan->harga }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('barangpenjualans.destroy', $barangpenjualan->id_barangpenjualan) }}" 
                                              method="POST">
                                            <a href="{{ route('barangpenjualans.edit', $barangpenjualan->id_barangpenjualan) }}" 
                                               class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        <div class="alert alert-danger">
                                            Data Barang Penjualan belum Tersedia.
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
