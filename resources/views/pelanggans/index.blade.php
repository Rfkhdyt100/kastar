@extends('layouts.app')

@section('title', 'Customer List')

@section('content')
<div class="container">
    <div class="header">
        <h1>Customer List</h1>
        <a href="{{ route('pelanggans.create') }}" class="btn btn-primary">Tambah Pelanggan</a>
    </div>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelanggans as $pelanggan)
            <tr>
                <td>{{ $pelanggan->id_pelanggan }}</td>
                <td>{{ $pelanggan->nama }}</td>
                <td>{{ $pelanggan->email }}</td>
                <td>{{ $pelanggan->no_telepon }}</td>
                <td>{{ $pelanggan->alamat }}</td>
                <td>{{ $pelanggan->created_at }}</td>
                <td>
                    <a href="{{ route('pelanggans.edit', $pelanggan) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('pelanggans.destroy', $pelanggan) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@push('styles')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    .btn {
        padding: 5px 10px;
        text-decoration: none;
        display: inline-block;
        margin: 2px;
        border-radius: 3px;
        cursor: pointer;
        border: none;
    }
    .btn-primary {
        background-color: #007bff;
        color: white;
    }
    .btn-info {
        background-color: #17a2b8;
        color: white;
    }
    .btn-danger {
        background-color: #dc3545;
        color: white;
    }
    .success-message {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
        padding: 15px;
        margin-bottom: 20px;
        border: 1px solid transparent;
        border-radius: 4px;
    }
    .container {
        padding: 20px;
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
</style>
@endpush
