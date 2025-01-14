@extends('layouts.app')

@section('title', 'Daftar Pembayaran')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar Pembayaran</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('pembayarans.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PEMBAYARAN</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID User</th>
                                <th scope="col">ID Transaksi</th>
                                <th scope="col">Tanggal Pembayaran</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pembayarans as $pembayaran)
                                <tr>
                                    <td>{{ $pembayaran->id_pembayaran }}</td>
                                    <td>{{ $payaran->id_user }}</td>
                                    <td>{{ $pembayaran->id_transaksi }}</td>
                                    <td>{{ $pembayaran->tanggal_pembayaran }}</td>
                                    <td>{{ $pembayaran->jumlah }}</td>
                                    <td>{{ $pembayaran->keterangan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('pembayarans.destroy', $pembayaran->id_pembayaran) }}" 
                                              method="POST">
                                            <a href="{{ route('pembayarans.edit', $pembayaran->id_pembayaran) }}" 
                                               class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">
                                        <div class="alert alert-danger">
                                            Data Pembayaran belum Tersedia.
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
