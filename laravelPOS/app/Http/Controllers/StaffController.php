<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {   
        $staff = Staff::all();
         // if($staff) {
        //     return response()->json([
        //         'success' => true,
        //         'data' => $staff,
        //     ], 201);
        // }
        return view('staff.index',compact('staff'));
        
    }

    public function dashboard()
    {
        return view('staff.dashboard');
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
    {
        $nama       = $request->input('nama');

        $staff=Staff::create([
            'nama'      => $nama,
        ]);
        

        if($staff) {
            return response()->json([
                'success' => true,
                'message' => 'Tambah Staff Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Tambah Staff Gagal!'
            ], 400);
        }
    }

    public function edit(Staff $staff,$id)
    {
        $staff = Staff::all()->where('id',$id);
        return view('staff.edit', compact('staff'));
    }

    public function update(Request $request, Staff $staff,$id)
    {
        $staff=Staff::Where('id',$id)->UpdateorCreate([
            'nama'      => $request->nama,
        ]);

        if($staff) {
            return response()->json([
                'success' => true,
                'message' => 'Ubah Staff Berhasil!',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Ubah Staff Gagal!'
            ], 400);
        }
    }

    public function destroy(Staff $staff,$id)
    {
        Staff::where($id)->delete();
     
        return response()->json(['success'=>'staff deleted successfully.']);
    }
}
