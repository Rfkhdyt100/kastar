@extends('layouts.app')

@section('title', 'Laporan Penjualan')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Laporan Penjualan</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('laporan_penjualans.create') }}" class="btn btn-md btn-success mb-3">TAMBAH LAPORAN</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID Laporan</th>
                                <th scope="col">ID Penjualan</th>
                                <th scope="col">Tanggal Laporan</th>
                                <th scope="col">Total Pendapatan</th>
                                <th scope="col">Jumlah Transaksi</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($laporanPenjualans as $laporanPenjualan)
                                <tr>
                                    <td>{{ $laporanPenjualan->id_laporan_penjualan }}</td>
                                    <td>{{ $laporanPenjualan->id_penjualan }}</td>
                                    <td>{{ $laporanPenjualan->tanggal_laporan }}</td>
                                    <td>{{ $laporanPenjualan->total_pendapatan_laporan }}</td>
                                    <td>{{ $laporanPenjualan->jumlah_transaksi_laporan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('laporan_penjualans.destroy', $laporanPenjualan->id_laporan_penjualan) }}" 
                                              method="POST">
                                            <a href="{{ route('laporan_penjualans.edit', $laporanPenjualan->id_laporan_penjualan) }}" 
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
                                            Data Laporan Penjualan belum Tersedia.
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
