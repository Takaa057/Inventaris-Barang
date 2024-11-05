<?php

namespace App\Http\Controllers;

use App\Http\Requests\LokasiRequest;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasi = Lokasi::all();
        return view('admin.lokasi.index',compact('lokasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lokasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LokasiRequest $request)
    {
        $lokasi = new Lokasi();
        $lokasi->insert($request->validated());

        return redirect()->route('lokasi.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lokasi $lokasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lokasi = Lokasi::find($id);
        return view('admin.lokasi.edit',compact('lokasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LokasiRequest $request, Lokasi $lokasi)
    {
        $lokasi->update($request->validated());

        return redirect()->route('lokasi.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lokasi = Lokasi::find($id);
        $lokasi->delete();

        return redirect()->route('lokasi.index');
    }
}
