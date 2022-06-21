<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\mahasiswa;


class apiController extends Controller
{
    public function all()
    {
        $mahasiswa = mahasiswa::all();
        return response()->json([
            'success'=> true,
            'massage'=> 'berhasil ditampilkan',
            'data'=> $mahasiswa

        ], 100);
    }
}



