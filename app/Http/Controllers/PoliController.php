<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poliklinik;

class PoliController extends Controller
{
    public function index(){
        return view('admin/poli', [
            "title" => "Poli",
            "daftar" => Poliklinik::all()
        ]);
    }

    public function list($slug){
        return view('admin/daftar_poli', [
            "title" => "Single Post",
            "list" => Poliklinik::find($slug)
    ]);
    }
}
