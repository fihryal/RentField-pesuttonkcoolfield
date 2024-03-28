<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class articleController extends Controller
{

    public function article(){
        $data = article::orderBy('created_at', 'desc')->get();
        return view('article.article')->with('data',$data);
    }

    public function index(){
        $data = article::orderBy('created_at', 'desc')->paginate(4);
        return view('index')->with('data',$data);
    }

    public function show($id){
 
    }
    
    public function create(){
        return view('article.create');
    }


    
    public function store(Request $request){
        $request->validate([
            'article' => 'required',
            'judul' => 'required'
        ],[
            'article.required' => 'artikel wajib diisi',
            'judul.required' => 'judul wajib diisi'
        ]);

        $data = [
            'article' => $request->article,
            'judul' => $request->judul,
        ];

        article::create($data);
        return redirect('/article')->with('success', 'Berhasil menambahkan data');
    }


    public function edit($id){
        $data = article::where('id', $id)->first();
        return view ('article.edit')->with('data',$data);
    }
    
    public function update(Request $request, $id){
        $request->validate([
            'article' => 'required',
            'judul' => 'required'
        ],[
            'article.required' => 'artikel wajib diisi',
            'judul.required' => 'judul wajib diisi'
        ]);

        $data = [
            'article' => $request->article,
            'judul' => $request->judul,
        ];

        article::where('id',$id)->update($data);
        return redirect('/article')->with('success', 'Berhasil melakukan perubahan data');
    }

    public function delete($id){
        article::where('id',$id)->delete($id);
        return redirect('/article')->with('success', 'Berhasil menghapus data');
    }
}
