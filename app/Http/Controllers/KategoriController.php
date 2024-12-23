<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategoris.index', compact('kategoris'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategoris.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        try {
            // Create a new category record
            Kategori::create([
                'nama_kategori' => $request->nama_kategori,
            ]);

            return redirect()->route('kategoris.index')
                ->with('success', 'Kategori added successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage()); // Log the error
            return redirect()->back()->withErrors(['error' => 'Failed to add kategori.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        return view('kategoris.show', compact('kategori')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id); 
        return view('kategoris.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($validatedData);

        return redirect()->route('kategoris.index')->with('success', 'Kategori berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id); 
        $kategori->delete(); 

        return redirect()->route('kategoris.index')->with('success', 'Kategori berhasil dihapus');
    }
}

