<?php

namespace App\Http\Controllers;

use App\Cashier;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index()
    {   
        $cashier = Cashier::all();
         // if($cashier) {
        //     return response()->json([
        //         'success' => true,
        //         'data' => $cashier,
        //     ], 201);
        // }
        return view('cashier.index',compact('cashier'));
    }

    public function create()
    {
        return view('cashier.create');
    }

    public function store(Request $request)
    {
        $nama       = $request->input('nama');
        $email      = $request->input('email');
        $umur       = $request->input('umur');
        $alamat     = $request->input('alamat');

        $cashier=Cashier::create([
            'nama'      => $nama,
            'email'     => $email,
            'umur'      => $umur,
            'alamat'    => $alamat,
        ]);
        

        if($cashier) {
            return response()->json([
                'success' => true,
                'message' => 'Tambah Data Kasir Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tambah Data Kasir Gagal!'
            ], 400);
        }
    }

    public function edit(Cashier $cashier,$id)
    {
        $cashier = Cashier::all()->where('id',$id);
        return view('cashier.edit', compact('cashier'));
    }

    public function update(Request $request, Cashier $cashier,$id)
    {
        $cashier=Cashier::Where('id',$id)->UpdateorCreate([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'umur'      => $request->umur,
            'alamat'    => $request->alamat,
        ]);

        if($cashier) {
            return response()->json([
                'success' => true,
                'message' => 'Ubah Data Kasir Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ubah Data Kasir Gagal!'
            ], 400);
        }
    }

    public function destroy(Cashier $cashier,$id)
    {
        Cashier::where($id)->delete();
     
        return response()->json(['success'=>'chashier deleted successfully.']);
    }
}
