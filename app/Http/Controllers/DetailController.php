<?php

namespace App\Http\Controllers;

use App\Http\Requests\DetailRequest;
use App\Models\Barang;
use App\Models\Detail;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $barang = Barang::find($id);   
        return view('admin.details.index',compact('barang'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'kondisi' => 'required',
            'lokasi_id' => 'required|exists:lokasis,id'
        ]);
    
        // Tentukan apakah akan update atau insert
        $detail = Detail::updateOrCreate(
            [
                'barang_id' => $request->barang_id,
                'barang_detail_id' => $request->barang_detail_id,
            ],
            [
                'kondisi' => $validatedData['kondisi'],
                'lokasi_id' => $validatedData['lokasi_id']
            ]
        );
    
        return redirect()->route('barang.index')->with('success', 'Data berhasil disimpan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $barang = Barang::with('detail')->find($id);
        // dd($barang);
        $lokasi = Lokasi::select('id','name')->get();
    
        return view('admin.details.index', compact('barang','lokasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        //
    }
}
