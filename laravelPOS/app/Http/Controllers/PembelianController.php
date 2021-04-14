<?php

namespace App\Http\Controllers;

use App\Pembelian;
use App\Produk;
use App\Staff;
use App\Supplier;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = Pembelian::all();
        

        // if($pembelian) {
        //     return response()->json([
        //         'success' => true,
        //         'data' => $pembelian,
        //     ], 201);
        // }

        return view('staff.pembelian.index', compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staff = Staff::all();
        $pembelian = Pembelian::all();
        $produk = Produk::all();
        $supplier = Supplier::all();
        return view('staff.pembelian.create',compact('staff','pembelian','produk','supplier'));
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
        $jumlah    = $request->input('jumlah');
        $harga     = $request->input('harga');
        $staffname = $request->input('staff_id');
        $suppliername = $request->input('suppliers_id');
        $produkname = $request->input('produks_id');

        $pembelian=Pembelian::create([
            'nama'      => $nama,
            'tanggal'   => $tanggal,
            'harga'     => $harga,
            'staff_id'  => $staffname,
            'suppliers_id' => $suppliername,
            'produks_id' => $produkname,
            'jumlah'    => $jumlah
        ]);
        

        if($pembelian) {
            return response()->json([
                'success' => true,
                'message' => 'Tambah Data Pembelian Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tambah Data Pembelian Gagal!'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembelian $pembelian,$id)
    {
        $pembelian = Pembelian::all()->where('id',$id);
        $staff = Staff::all();
        $produk = Produk::all();
        $supplier = Supplier::all();
        return view('staff.pembelian.edit', compact('pembelian','pengeluaran','produk','supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian,$id)
    {
        $pembelian=Pembelian::Where('id',$id)->UpdateorCreate([
            'nama'      => $request->nama,
            'tanggal'   => $request->tanggal,
            'harga'     => $request->harga,
            'jumlah'     => $request->jumlah,
            'staff_id' =>$request->staffname,
            'suppliers_id' =>$request->suppliername,
            'produks_id' =>$request->produkname
        ]);


        if($pembelian) {
            return response()->json([
                'success' => true,
                'message' => 'Ubah Data Pembelian Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ubah Data Pembelian Gagal!'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembelian $pembelian,$id)
    {
        Pembelian::where($id);
     
        return response()->json(['success'=>'data pembelian deleted successfully.']);
    }
}
