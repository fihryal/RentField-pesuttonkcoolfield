<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class articleController extends Controller
{

    public function index(){
        $data = article::orderBy('created_at', 'desc')->get();
        return view('article')->with('data',$data);
    }

    public function show($id){
 
    }
    
    public function create(){
        return view('atricle.create');
    }


    
    public function store(Request $request){
        $request->validate([
            'article' => 'required',
            'judul' => 'required'
        ],[
            'article.required' => 'artikel wajib diisi',
            'judul.required' => 'judul wajib diisi'
        ]);

        article::create([
            'article' => $request->article,
            'judul' => $request->judul,
            

        ]);
        return redirect('/article')->with('success', 'Berhasil menambahkan data');
    }


    public function edit(){

    }
    
    public function update(){

    }

    public function destroy(){

    }
}
