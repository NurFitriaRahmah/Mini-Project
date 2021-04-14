<?php

namespace App\Http\Controllers;

use App\Pengeluaran;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran = Pengeluaran::all();

        // if($pengeluaran) {
        //     return response()->json([
        //         'success' => true,
        //         'data' => $pengeluaran,
        //     ], 201);
        // }

        return view('staff.pengeluaran.index', compact('pengeluaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.pengeluaran.create');
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
        $tanggal    = $request->input('tanggal');
        $harga     = $request->input('harga');

        $pengeluaran=Pengeluaran::create([
            'nama'      => $nama,
            'tanggal'   => $tanggal,
            'harga'    => $harga,
        ]);
        

        if($pengeluaran) {
            return response()->json([
                'success' => true,
                'message' => 'Tambah Data Pengeluaran Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tambah Data Pengeluaran Gagal!'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pengeluaran $pengeluaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengeluaran $pengeluaran,$id)
    {
        $pengeluaran = Pengeluaran::all()->where('id',$id);
        return view('staff.pengeluaran.edit', compact('pengeluaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengeluaran $pengeluaran,$id)
    {
        $pengeluaran=Pengeluaran::Where('id',$id)->UpdateorCreate([
            'nama'      => $request->nama,
            'tanggal'   => $request->tanggal,
            'harga'     => $request->harga,
        ]);


        if($pengeluaran) {
            return response()->json([
                'success' => true,
                'message' => 'Ubah Data Pengeluaran Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ubah Data Pengeluaran Gagal!'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pengeluaran  $pengeluaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengeluaran $pengeluaran,$id)
    {
        Pengeluaran::where($id);
     
        return response()->json(['success'=>'data pengeluaran deleted successfully.']);
    }
}
