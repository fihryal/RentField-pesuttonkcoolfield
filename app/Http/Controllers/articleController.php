<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class articleController extends Controller
{
    
    public function index(){
        
    }

    public function show($id){
        $task = article::find($id);
        return $task;
    }


    public function create(){
        return view('atricle.create');
    }

    
    public function store(Request $request){
        article::create([
            'article' => $request->article,
        ]);
        return redirect('/article');
    }


    public function edit(){

    }
    
    public function update(){

    }

    public function destroy(){

    }
}
