@extends('layouts.app')

@section('title', 'Daftar Diskon')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar Diskon</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('diskons.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DISKON</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Diskon</th>
                                <th scope="col">Persentase Diskon</th>
                                <th scope="col">Tanggal Mulai Diskon</th>
                                <th scope="col">Tanggal Berakhir Diskon</th>
                                <th scope="col">ID Produk</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($diskons as $diskon)
                                <tr>
                                    <td>{{ $diskon->id_diskon }}</td>
                                    <td>{{ $diskon->nama_diskon }}</td>
                                    <td>{{ $diskon->persentase_diskon }}</td>
                                    <td>{{ $diskon->tanggal_mulai_diskon }}</td>
                                    <td>{{ $diskon->tanggal_berakhir_diskon }}</td>
                                    <td>{{ $diskon->id_produk }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('diskons.destroy', $diskon->id_diskon) }}" 
                                              method="POST">
                                            <a href="{{ route('diskons.edit', $diskon->id_diskon) }}" 
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
                                            Data Diskon belum Tersedia.
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
