<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stoks = Stok::all();
        return view('stoks.index', compact('stoks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stoks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'id_produk' => 'required|integer', 
            'tanggal_update_stok' => 'required|date', 
            'stok_awal' => 'required|integer', 
            'stok_akhir' => 'required|integer', 
            'keterangan' => 'nullable|string', 
        ]); 
        
        try { 
            Stok::create($request->all()); 
            return redirect()->route('stoks.index') 
            ->with('success', 'Stok added successfully.'); 
        } catch (\Exception $e) { 
            Log::error($e->getMessage()); 
            return redirect()->back()->withErrors(['error' => 'Failed to add stok.']); 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Stok $stok)
    {
        return view('stoks.show', compact('stok')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $stok = Stok::findOrFail($id); 
        return view('stoks.edit', compact('stok'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id_produk' => 'required|integer',
            'tanggal_update_stok' => 'required|date',
            'stok_awal' => 'required|integer',
            'stok_akhir' => 'required|integer',
            'keterangan' => 'nullable|string',
        ]);

        $stok = Stok::findOrFail($id);
        $stok->update($validatedData);

        return redirect()->route('stoks.index')->with('success', 'Stok berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $stok = Stok::findOrFail($id); 
        $stok->delete(); 

        return redirect()->route('stoks.index')->with('success', 'Stok berhasil dihapus');
    }
}
