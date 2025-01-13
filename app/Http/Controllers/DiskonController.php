<?php

namespace App\Http\Controllers;

use App\Models\Diskon; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Log;

class DiskonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diskons = Diskon::all();
        return view('diskons.index', compact('diskons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('diskons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_diskon' => 'required|string|max:255',
            'persentase_diskon' => 'required|numeric',
            'tanggal_mulai_diskon' => 'required|date',
            'tanggal_berakhir_diskon' => 'required|date',
            'id_produk' => 'required|integer',
        ]);

        try {
            Diskon::create($request->all());
            return redirect()->route('diskons.index')
                ->with('success', 'Diskon added successfully.');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Failed to add diskon.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $diskon = Diskon::findOrFail($id);
        return view('diskons.edit', compact('diskon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nama_diskon' => 'required|string|max:255',
            'persentase_diskon' => 'required|numeric',
            'tanggal_mulai_diskon' => 'required|date',
            'tanggal_berakhir_diskon' => 'required|date',
            'id_produk' => 'required|integer',
        ]);

        $diskon = Diskon::findOrFail($id);
        $diskon->update($validatedData);

        return redirect()->route('diskons.index')->with('success', 'Diskon updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $diskon = Diskon::findOrFail($id);
        $diskon->delete();

        return redirect()->route('diskons.index')->with('success', 'Diskon deleted successfully.');
    }
}
