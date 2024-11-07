<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\LokasiRequest;
use App\Http\Resources\LokasiResource;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lokasi = Lokasi::latest()->get();
        // data  banyak
        return LokasiResource::collection($lokasi);

        //data sendiri
        // return LokasiResource::make($lokasi[1]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LokasiRequest $request)
    {
        $lokasi = Lokasi::create($request->validated());

        return LokasiResource::make($lokasi);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LokasiRequest $request, String $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->update($request->validated());

        return LokasiResource::make($lokasi);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $lokasi = Lokasi::findOrFail($id);
        $lokasi->delete();
    return response()->noContent();
    }
}
