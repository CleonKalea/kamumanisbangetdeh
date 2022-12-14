<?php

namespace App\Http\Controllers;

use App\Models\UserView;
use Illuminate\Http\Request;
use App\Models\DokterView;
use App\Models\JadwalDokter;
use App\Models\JenisKelamin;
use App\Models\Poliklinik;
use Illuminate\Support\ViewErrorBag;

class UserViewController extends Controller
{
    public function index()
    {
        return view('admin/user', [
            "title" => "User",
            "daftar" => UserView::all()
        ]);
    }

    public function store(Request $request)
    {
        $user = new UserView;
        
        $user->username = $request->username;
        $user->email = $request->email;
        $user->namauser = $request->namauser;
        $user->no_telp = $request->notelp;
        $user->password = $request->Password;

        $user->save();

        return view('admin/user', [
            "title" => "User",
            "daftar" => UserView::all()
        ]);
    }

}
