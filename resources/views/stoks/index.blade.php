@extends('layouts.app')

@section('title', 'Daftar Stok')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar Stok</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('stoks.create') }}" class="btn btn-md btn-success mb-3">TAMBAH STOK</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID Produk</th>
                                <th scope="col">Tanggal Update Stok</th>
                                <th scope="col">Stok Awal</th>
                                <th scope="col">Stok Akhir</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($stoks as $stok)
                                <tr>
                                    <td>{{ $stok->id_stok }}</td>
                                    <td>{{ $stok->id_produk }}</td>
                                    <td>{{ $stok->tanggal_update_stok }}</td>
                                    <td>{{ $stok->stok_awal }}</td>
                                    <td>{{ $stok->stok_akhir }}</td>
                                    <td>{{ $stok->keterangan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('stoks.destroy', $stok->id_stok) }}" 
                                              method="POST">
                                            <a href="{{ route('stoks.edit', $stok->id_stok) }}" 
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
                                            Data Stok belum Tersedia.
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

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@endpush

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<style>

</style>
@endpush
