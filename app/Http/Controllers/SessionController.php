<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }

    function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'password wajib diisi',
        ]);

        $infologin = [
            'email' => $request -> email,
            'password' => $request -> password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/home')->with('success', 'Berhasil login');
        }else{
            return redirect('sesi')->withErrors('Email dan Password yang dimasukkan tidak valid');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/home')->with('success',' Berhasil logut');
    }

    function register(){
        return view('sesi/register');
    }

    function create(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required| unique:users',
            'password' => 'required| min:6',
        ],[
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah pernah digunakan, silahkan pilih email yang lain',
            'password.required' => 'password wajib diisi',
            'password.required' => 'Minimum password yang diizinkan adalah 6 karakter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);

        $infologin = [
            'name' => $request-> name,
            'email' => $request -> email,
            'password' => $request -> password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/home')->with('success', Auth::user()->name . 'Berhasil login');
        }else{
            return redirect('sesi/register')->withErrors('Email dan Password yang dimasukkan tidak valid');
        }
    }

}