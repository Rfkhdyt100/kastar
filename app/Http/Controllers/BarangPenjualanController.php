<?php

namespace App\Http\Controllers;

use App\Models\BarangPenjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BarangPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangPenjualans = BarangPenjualan::all();
        return view('barang_penjualans.index', compact('barangPenjualans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang_penjualans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_produk' => 'required|integer',
            'id_penjualan' => 'required|integer',
            'produk_terjual' => 'required|integer',
            'subtotal' => 'required|numeric',
        ]);

        try {
            BarangPenjualan::create($request->all());
            return redirect()->route('barang_penjualans.index')
                ->with('success', 'Barang Penjualan added successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to add barang penjualan.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $barangPenjualan = BarangPenjualan::findOrFail($id);
        return view('barang_penjualans.edit', compact('barangPenjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_produk' => 'required|integer',
            'id_penjualan' => 'required|integer',
            'produk_terjual' => 'required|integer',
            'subtotal' => 'required|numeric',
        ]);

        $barangPenjualan = BarangPenjualan::findOrFail($id);
        $barangPenjualan->update($validatedData);

        return redirect()->route('barang_penjualans.index')->with('success', 'Barang Penjualan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $barangPenjualan = BarangPenjualan::findOrFail($id);
        $barangPenjualan->delete();

        return redirect()->route('barang_penjualans.index')->with('success', 'Barang Penjualan deleted successfully.');
    }
}
