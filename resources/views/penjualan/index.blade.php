@extends('layouts.app')

@section('title', 'Daftar Penjualan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar Penjualan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('penjualans.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PENJUALAN</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID User</th>
                                <th scope="col">ID Pelanggan</th>
                                <th scope="col">Total Pendapatan</th>
                                <th scope="col">Tanggal Penjualan</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($penjualans as $penjualan)
                                <tr>
                                    <td>{{ $penjualan->id_penjualan }}</td>
                                    <td>{{ $penjualan->id_user }}</td>
                                    <td>{{ $penjualan->id_pelanggan }}</td>
                                    <td>{{ $penjualan->total_pendapatan }}</td>
                                    <td>{{ $penjualan->tanggal_penjualan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('penjualans.destroy', $penjualan->id_penjualan) }}" 
                                              method="POST">
                                            <a href="{{ route('penjualans.edit', $penjualan->id_penjualan) }}" 
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
                                            Data Penjualan belum Tersedia.
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
