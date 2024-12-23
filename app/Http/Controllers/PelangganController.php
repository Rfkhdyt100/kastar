<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    public function index()
    {
        $pelanggans = Pelanggan::latest()->get();
        return view('pelanggans.index', compact('pelanggans'));
    }

    public function create()
    {
        return view('pelanggans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggans',
            'no_telepon' => 'required|string|max:15',
            'alamat' => 'nullable|string'
        ]);

        Pelanggan::create([ 
            'nama' => $request->nama_pelanggan, 
            'email' => $request->email, 
            'no_telepon' => $request->no_telepon, 
            'alamat' => $request->alamat ]); 
            
        return redirect()->route('pelanggans.index') 
        ->with('success', 'Customer added successfully.'); 
    }

    public function edit(Pelanggan $pelanggan)
    {
        return view('pelanggans.edit', compact('pelanggan'));
    }

    public function update(Request $request, Pelanggan $pelanggan)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggans,email,'.$pelanggan->id_pelanggan.',id_pelanggan',
            'no_telepon' => 'required|string|max:15',
            'alamat' => 'nullable|string'
        ]);
    
        $pelanggan->update([
            'nama' => $request->nama_pelanggan,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat
        ]);
    
        return redirect()->route('pelanggans.index')
            ->with('success', 'Customer updated successfully.');
    }

    public function destroy(Pelanggan $pelanggan)
    {
        $pelanggan->delete();
        return redirect()->route('pelanggans.index')
            ->with('success', 'Customer deleted successfully.');
    }

}
