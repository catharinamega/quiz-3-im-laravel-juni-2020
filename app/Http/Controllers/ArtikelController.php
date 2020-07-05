<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    //
    
    public function image(){
        return view('image');
    }
    
    
    
    
    
    public function create(){
        return view('form');
    }

    public function store(Request $request){
        $new_pertanyaan = ArtikelModel::save($request->all());
        return redirect('/artikel');

    }

    public function index() {
        $pertanyaan = ArtikelModel::get_all();
        //buatcek
        // dd($pertanyaan);
        return view('artikel.index', ['artikel'=>$artikel]);

    }

    public function show($id){
        $pertanyaan = ArtikelModel::find_by_id($id);

        return view('artikel.show',compact($artikel));
    }
}
