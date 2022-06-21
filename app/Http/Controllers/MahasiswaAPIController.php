<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaAPIController extends Controller
{
    public function all()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success'=> true,
            'massage'=> 'berhasil ditampilkan',
            'data'=> $mahasiswa

        ], 200);
    }

    public function create(Request $request)
    {
        $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama'=>$request->nama,   
            'gender' => $request->gender,
            'jurusan'=>$request->jurusan,
            'bidang_minat'=>$request->bidang_minat 
        ]);

        if($mahasiswa)
        {
            return response()->json([
                'success'=> true,
                'massage'=> 'Berhasil disimpan'
            ], 200);
        }

        else
        {
            return response()->json([
                'success'=> false,
                'massage'=> 'Gagal disimpan'
            ], 401);
        }
    }

    public function update(Request $request)
    {
        $mahasiswa = Mahasiswa::whereId($request->id)->update([
            'nim' => $request->nim,
            'nama'=>$request->nama,   
            'gender' => $request->gender,
            'jurusan'=>$request->jurusan,
            'bidang_minat'=>$request->bidang_minat 
        ]);

        if($mahasiswa)
        {
            return response()->json([
                'success'=> true,
                'massage'=> 'Berhasil diubah'
            ], 200);
        }

        else
        {
            return response()->json([
                'success'=> false,
                'massage'=> 'Gagal diubah'
            ], 400);
        }
    }

    // public function update($id, Request $request)
    // {
    //     $mahasiswa = Mahasiswa::find($id);
    //     $mahasiswa->nim = $request->nim;
    //     $mahasiswa->nama = $request->nama;
    //     $mahasiswa->gender = $request->gender;
    //     $mahasiswa->jurusan = $request->jurusan;
    //     $mahasiswa->bidang_minat = $request->bidang_minat;
    //     $mahasiswa->save();
    //     return redirect('/mahasiswa');
    // }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        
        if($mahasiswa)
        {
            return response()->json([
                'success'=> true,
                'massage'=> 'Berhasil dihapus'
            ], 200);
        }

        else
        {
            return response()->json([
                'success'=> false,
                'massage'=> 'Gagal dihapus'
            ], 400);
        }
        
    }
    
}


