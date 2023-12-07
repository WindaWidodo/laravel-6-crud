<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Whoops\Run;

class FormController extends Controller
{
    public function bio(){
        return view('halaman.form');
    }

    public function kirim(Request $request){
        $nama   = $request ['nama'];
        $tempat_tanggal_lahir   = $request ['tempat_tanggal_lahir'];
        $alamat = $request ['address'];
        return view ('halaman.home',compact('nama','alamat','tempat_tanggal_lahir'));
    }
}