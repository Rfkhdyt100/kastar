<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualans = Penjualan::all();
        return view('penjualans.index', compact('penjualans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'id_pelanggan' => 'required|integer',
            'total_pendapatan' => 'required|numeric',
            'tanggal_penjualan' => 'required|date',
        ]);

        try {
            Penjualan::create($request->all());
            return redirect()->route('penjualans.index')
                ->with('success', 'Penjualan added successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to add penjualan.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualans.edit', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_user' => 'required|integer',
            'id_pelanggan' => 'required|integer',
            'total_pendapatan' => 'required|numeric',
            'tanggal_penjualan' => 'required|date',
        ]);

        $penjualan = Penjualan::findOrFail($id);
        $penjualan->update($validatedData);

        return redirect()->route('penjualans.index')->with('success', 'Penjualan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();

        return redirect()->route('penjualans.index')->with('success', 'Penjualan deleted successfully.');
    }
}
