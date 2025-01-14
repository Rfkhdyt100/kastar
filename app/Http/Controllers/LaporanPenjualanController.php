<?php

namespace App\Http\Controllers;

use App\Models\LaporanPenjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LaporanPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $laporanPenjualans = LaporanPenjualan::all();
        return view('laporan_penjualans.index', compact('laporanPenjualans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('laporan_penjualans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_penjualan' => 'required|integer',
            'tanggal_laporan' => 'required|date',
            'total_pendapatan_laporan' => 'required|numeric',
            'jumlah_transaksi_laporan' => 'required|integer',
        ]);

        try {
            LaporanPenjualan::create($request->all());
            return redirect()->route('laporan_penjualans.index')
                ->with('success', 'Laporan Penjualan added successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to add laporan penjualan.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $laporanPenjualan = LaporanPenjualan::findOrFail($id);
        return view('laporan_penjualans.edit', compact('laporanPenjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_penjualan' => 'required|integer',
            'tanggal_laporan' => 'required|date',
            'total_pendapatan_laporan' => 'required|numeric',
            'jumlah_transaksi_laporan' => 'required|integer',
        ]);

        $laporanPenjualan = LaporanPenjualan::findOrFail($id);
        $laporanPenjualan->update($validatedData);

        return redirect()->route('laporan_penjualans.index')->with('success', 'Laporan Penjualan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $laporanPenjualan = LaporanPenjualan::findOrFail($id);
        $laporanPenjualan->delete();

        return redirect()->route('laporan_penjualans.index')->with('success', 'Laporan Penjualan deleted successfully.');
    }
}

