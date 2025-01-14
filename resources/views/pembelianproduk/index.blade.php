@extends('layouts.app')

@section('title', 'Daftar Pembelian Produk')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar Pembelian Produk</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('pembelian_produks.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PEMBELIAN</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID User</th>
                                <th scope="col">ID Produk</th>
                                <th scope="col">Tanggal Pembelian</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pembelianProduks as $pembelianProduk)
                                <tr>
                                    <td>{{ $pembelianProduk->id_pembelian }}</td>
                                    <td>{{ $pembelianProduk->id_user }}</td>
                                    <td>{{ $pembelianProduk->id_produk }}</td>
                                    <td>{{ $pembelianProduk->tanggal_pembelian }}</td>
                                    <td>{{ $pembelianProduk->jumlah }}</td>
                                    <td>{{ $pembelianProduk->keterangan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('pembelian_produks.destroy', $pembelianProduk->id_pembelian) }}" 
                                              method="POST">
                                            <a href="{{ route('pembelian_produks.edit', $pembelianProduk->id_pembelian) }}" 
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
                                            Data Pembelian Produk belum Tersedia.
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
