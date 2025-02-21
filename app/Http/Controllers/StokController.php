<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

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
            'nama' => 'required',
            'kondisi' => 'required',
        ]);

        //Hanya masukan atribut yang diizinkan
        Stok::create($request->only(['nama', 'kondisi']));
        return redirect()->route('stoks.index')->with('success', 'Stok added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stok $stoks)
    {
        return view('stoks.show', compact('stoks'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stok $stoks)
    {
        return view('stoks.edit', compact('stoks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stok $stoks)
    {
        $request->validate([
            'nama' => 'required',
            'kondisi' => 'required',
        ]);

        //Hanya masukan atribut yang diizinkan
        Stok::create($request->only(['nama', 'kondisi']));
        return redirect()->route('stok.index')->with('success', 'Stok updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stok $stok)
    {
        $stok->delete();
        return redirect()->route('stok.indek')->with('success', 'Stok deleted successfully');
    }
}
