<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Obat::all();
        return view('obat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Obat::create($request->all());
        return redirect()->route('obat.index')->with('success', 'Obat berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat, $id)
    {
        $obat = Obat::find($id);

        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat, $id)
    {
        $obat = Obat::find($id);

        return view('obat.edit', compact('obat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat, $id)
    {
        Obat::find($id);

        Obat::update($request->all());
        return redirect()->route('obat.index')->with('success', 'Data obat berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obat $obat, $id)
    {
        Obat::destroy($id);
        return redirect()->route('obat.index')->with('success', 'Obat Berhasil dihapus');
    }
}
