<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $supplier = Supplier::all();

        if($supplier) {
            return response()->json([
                'success' => true,
                'data' => $supplier,
            ], 201);
        }

        return view('staff.supplier.index', compact('supplier'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama       = $request->input('nama');
        $no_telp    = $request->input('no_telp');
        $alamat     = $request->input('alamat');

        $supplier=Supplier::create([
            'nama'      => $nama,
            'no_telp'     => $no_telp,
            'alamat'  => $alamat,
        ]);
        

        if($supplier) {
            return response()->json([
                'success' => true,
                'message' => 'Tambah Data Supplier Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tambah Data Supplier Gagal!'
            ], 400);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

/**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::all()->where('id',$id);
        return view('staff.supplier.edit', compact('supplier'));
    }

 /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $supplier=Supplier::Where('id',$id)->UpdateorCreate([
            'nama'      => $request->nama,
            'no_telp'     => $request->no_telp,
            'alamat'  => $request->alamat,
        ]);

        if($supplier) {
            return response()->json([
                'success' => true,
                'message' => 'Ubah Data Supplier Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ubah Data Supplier Gagal!'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::where($id);
     
        return response()->json(['success'=>'Supplier deleted successfully.']);
    }
}
