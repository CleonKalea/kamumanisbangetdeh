<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserViewController extends Controller
{
    public function index(){
        return view('admin/user', [
            "title" => "User",
            "daftar" => User::all()
        ]);
    }

    // public function create()
    // {
    //     return view('admin/user');
    // }
}
