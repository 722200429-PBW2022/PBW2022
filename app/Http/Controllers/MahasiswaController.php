<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    
    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::orderby('id','asc')->paginate(10);
        
        return view('mahasiswa',['mahasiswa' => $mahasiswa]);        
    }

    public function searching(Request $request){
        $cari = $request->cari;
        $mahasiswa = Mahasiswa::where('nama', 'like', '%'.$cari.'%')
        ->orWhere('nim','like','%'.$cari.'%')
        ->paginate();
        return view('mahasiswa', ['mahasiswa'=>$mahasiswa]);
    }

    public function formulirMhs()
    {
        return view('formulirMhs');
    }

    public function simpanMhs(Request $request)
    {
        mahasiswa::create([
            'nim' => $request->nim,
            'nama'=>$request->nama,   
            'gender' => $request->gender,
            'jurusan'=>$request->jurusan,
            'bidang_minat'=>$request->bidang_minat
        ]);
        return redirect("/mahasiswa")-> with('alert1','Data berhasil ditambahkan');
    }

    public function editMhs($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('formulirEditMhs', ['mahasiswa'=> $mahasiswa]);
    }

    public function updateMhs($id, Request $request)
    {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->gender = $request->gender;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->bidang_minat = $request->bidang_minat;
        $mahasiswa->save();
        return redirect('/mahasiswa')-> with('alert2','Data berhasil diubah');
    }

    public function deleteMhs($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->delete();
        return redirect('/mahasiswa')-> with('alert3','Data berhasil dihapus');
    }

    }

