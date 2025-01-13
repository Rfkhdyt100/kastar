<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelis = Pembeli::all();
        return view('pembelis.index', compact('pembelis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembelis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'custumor' => 'required|string|max:255',
            'tanggal_beli' => 'required|date',
            'waktu_beli' => 'required|date_format:H:i',
            'metode_pembayaran' => 'required|string|max:255',
            'produk' => 'required|integer',
            'bayar' => 'required|numeric',
            'kembali' => 'required|numeric',
        ]);

        try {
            Pembeli::create($request->all());
            return redirect()->route('pembelis.index')
                ->with('success', 'Pembeli added successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to add pembeli.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('pembelis.edit', compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'custumor' => 'required|string|max:255',
            'tanggal_beli' => 'required|date',
            'waktu_beli' => 'required|date_format:H:i',
            'metode_pembayaran' => 'required|string|max:255',
            'produk' => 'required|integer',
            'bayar' => 'required|numeric',
            'kembali' => 'required|numeric',
        ]);

        $pembeli = Pembeli::findOrFail($id);
        $pembeli->update($validatedData);

        return redirect()->route('pembelis.index')->with('success', 'Pembeli updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();

        return redirect()->route('pembelis.index')->with('success', 'Pembeli deleted successfully.');
    }
}
