<?php

namespace App\Http\Controllers;

use App\Models\PembelianProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PembelianProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembelianProduks = PembelianProduk::all();
        return view('pembelian_produks.index', compact('pembelianProduks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembelian_produks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'id_produk' => 'required|integer',
            'tanggal_pembelian' => 'required|date',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        try {
            PembelianProduk::create($request->all());
            return redirect()->route('pembelian_produks.index')
                ->with('success', 'Pembelian Produk added successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to add pembelian produk.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pembelianProduk = PembelianProduk::findOrFail($id);
        return view('pembelian_produks.edit', compact('pembelianProduk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_user' => 'required|integer',
            'id_produk' => 'required|integer',
            'tanggal_pembelian' => 'required|date',
            'jumlah' => 'required|numeric',
            'keterangan' => 'nullable|string',
        ]);

        $pembelianProduk = PembelianProduk::findOrFail($id);
        $pembelianProduk->update($validatedData);

        return redirect()->route('pembelian_produks.index')->with('success', 'Pembelian Produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pembelianProduk = PembelianProduk::findOrFail($id);
        $pembelianProduk->delete();

        return redirect()->route('pembelian_produks.index')->with('success', 'Pembelian Produk deleted successfully.');
    }
}
