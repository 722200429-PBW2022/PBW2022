<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        $user=User::paginate();
        return view('user',['user'=>$user]);
    }

    public function formulirUser()
    {
        return view ('formulirUser');
    }

    public function simpanUser(Request $request)
    {
        $user = User::create([
            'nim' => $request -> nim,
            'nama_user' => $request -> nama_user,
            'no_hp' => $request -> no_hp,
            'password' => md5($request -> password)
        ]);
        
        return redirect('/user');
    }

    public function login()
    {
        return view('login');
    }

    public function cekLogin(Request $request)
    {
        $user = User::where('no_hp', $request->no_hp)
        ->where('password',md5($request->password))
        ->first();
        // $validatedData = $request->validate([
        //     'no_telp' => ['required'],
        //     'password' => ['required'],
        // ]);
        Auth::login($user);
        return redirect('/home');
    }
   
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('flash','Anda Berhasil Log Out');
    }

    public function editUser($id)
    {
        $user= User::find($id);
        return view('formulirEditUsers', ['user'=> $user]);
    }

    public function updateUser($id, Request $request)
    {
        $user = User::find($id);
        $user->nim = $request->nim;
        $user->nama_user = $request->nama_user;
        $user->no_hp= $request->no_hp;
        $user->password = md5($request -> password);
        $user->save();
        return redirect('/user')-> with('alert2','Data berhasil diubah');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/user')-> with('alert3','Data berhasil dihapus');
    }

    public function home()
    {
            return view('/home');
    }
    

}

