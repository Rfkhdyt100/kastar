<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggans = Pelanggan::all();
        return view('pelanggans.index', compact('pelanggans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required|string|max:255',
            'email' => 'required|email|unique:pelanggans',
            'telepon' => 'required|string|max:15',
            'alamat' => 'nullable|string'
        ]);

        Pelanggan::create([
            'nama' => $request->nama_pelanggan,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pelanggans.index')
            ->with('success', 'Customer added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggans.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggans.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'email' => 'required|email|unique:pelanggans,email,'.$id.',id_pelanggan',
            'telepon' => 'required',
            'alamat' => 'required',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);

        if ($request->has('nama_pelanggan')) {
            $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        }

        if ($request->has('email')) {
            $pelanggan->email = $request->email;
        }

        if ($request->has('telepon')) {
            $pelanggan->telepon = $request->telepon;
        }

        if ($request->has('alamat')) {
            $pelanggan->alamat = $request->alamat;
        }

        $pelanggan->save();

        return redirect()->route('pelanggans.index')->with('success', 'Pelanggan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();
        
        return redirect()->route('pelanggans.index')->with('success', 'Pelanggan deleted successfully.');
    }
}