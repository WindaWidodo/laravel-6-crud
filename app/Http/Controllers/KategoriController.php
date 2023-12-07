<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function create(){
        return view ('Kategori.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=> 'required',
            'deskripsi' => 'required',
        ]);

        $kategori = new Kategori;
        
        $kategori->nama = $request->nama;
        $kategori->deskripsi = $request->deskripsi;

        $kategori->save();

        return redirect('/Kategori');
        
    }


    public function index()// mengambil file dari database
    {
        $kategori = Kategori::all();
        return view('kategori.index',compact('kategori'));
    }

    public function show($kategori_id)
    {
        $kategori= Kategori::where('id',$kategori_id)->first();
        return view('kategori.show', compact('kategori'));     
    }

    public function edit ($kategori_id)
    {
        $kategori = Kategori::where('id', $kategori_id)->first();
        return view('kategori.edit', compact('kategori'));
    }

    public function update (Request $request, $kategori_id)
    {
        $request->validate([
            'nama'=> 'required',
            'deskripsi' => 'required',
        ]);

        $kategori = Kategori::find($kategori_id);
        
        $kategori->nama = $request['nama']; 
        $kategori->deskripsi = $request['deskripsi']; 
        
        $kategori->save();

        return redirect('/Kategori');

    }
    
    public function destroy($kategori_id)
    {
        $kategori = Kategori::find($kategori_id);
        $kategori->delete();
        
        return redirect('/Kategori');
    }
}