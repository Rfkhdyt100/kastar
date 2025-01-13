@extends('layouts.app')

@section('title', 'Daftar Shift')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center my-4">Daftar Shift</h3>
                <hr>
            </div>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="{{ route('shifts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH SHIFT</a>
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ID User</th>
                                <th scope="col">Tanggal Mulai</th>
                                <th scope="col">Waktu Mulai</th>
                                <th scope="col">Waktu Selesai</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($shifts as $shift)
                                <tr>
                                    <td>{{ $shift->id_shift }}</td>
                                    <td>{{ $shift->id_user }}</td>
                                    <td>{{ $shift->tanggal_mulai }}</td>
                                    <td>{{ $shift->waktu_mulai }}</td>
                                    <td>{{ $shift->waktu_selesai }}</td>
                                    <td>{{ $shift->keterangan }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin?');" 
                                              action="{{ route('shifts.destroy', $shift->id_shift) }}" 
                                              method="POST">
                                            <a href="{{ route('shifts.edit', $shift->id_shift) }}" 
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
                                            Data Shift belum Tersedia.
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
