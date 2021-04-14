<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
         // if($kategori) {
        //     return response()->json([
        //         'success' => true,
        //         'data' => $kategori,
        //     ], 201);
        // }

        return view('staff.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.kategori.create');
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

        $kategori=Kategori::create([
            'nama'      => $nama,
        ]);
        

        if($kategori) {
            return response()->json([
                'success' => true,
                'message' => 'Tambah Kategori Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tambah Kategori Gagal!'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategori $kategori,$id)
    {
        $kategori = Kategori::all()->where('id',$id);
        return view('staff.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategori $kategori,$id)
    {
        $kategori=Kategori::Where('id',$id)->UpdateorCreate([
            'nama'      => $request->nama,
        ]);

        if($kategori) {
            return response()->json([
                'success' => true,
                'message' => 'Ubah Kategori Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ubah Kategori Gagal!'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori,$id)
    {
        Kategori::where($id)->delete();
     
        return response()->json(['success'=>'kategori deleted successfully.']);
    }
}
