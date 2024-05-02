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

    public function detail($id){
        $data = article::where('id', $id)->first();
        return view ('article.detail')->with('data',$data);
    }

    public function error(){
        return view('article.error');
    }
    
    public function create(){
        return view('article.create');
    }


    
    public function store(Request $request){
        $request->validate([
            'article' => 'required',
            'judul' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png'
        ],[
            'article.required' => 'artikel wajib diisi',
            'judul.required' => 'judul wajib diisi',
            'foto.required' => 'foto wajib diisi',
            'foto.mimes' => 'foto hanya diperbolehkan berinteraksi JPEG, JPG dan PNG'
        ]);

        $foto_file = $request->file('foto');
        $foto_extension = $foto_file->extension();
        $foto_nama = date('ymdhis').".".$foto_extension;
        $foto_file -> move(public_path('foto'),$foto_nama);
        $data = [
            'article' => $request->article,
            'judul' => $request->judul,
            'foto' => $foto_nama,
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
