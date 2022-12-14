<?php

use App\Http\Controllers\CrudController;
use App\Http\Controllers\DokterViewController;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\UserViewController;
use App\Models\DokterView;
use App\Models\Poli;
use App\Models\UserView;
use Database\Factories\DokterViewFactory;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('form', [
            "title" => "Welcome"
    ]);
});

Route::get('/login', function () {
    return view('login', [
            "title" => "Login"
    ]);
});

Route::prefix('registrasi')->group(function() {
    Route::get('/daftar', function(){
        return view('registrasi/form', [
                "title" => "Registrasi"
        ]);
    });
    
    Route::post('/submit', function(){
        return view('registrasi/submitregistrasi', [
                "title" => "Registrasi"
        ]);
    });
});

Route::prefix('admin')->group(function() {
    Route::get('/home', function(){
        return view('admin/home', [
                "title" => "Home",
                "nama" => "Wahyu",
                "umur" => "18 Tahun"
        ]);
    });
    
    Route::get('/about', function(){
        return view('admin/about', [
                "title" => "About"
        ]);
    });
    
    Route::get('/poli', [PoliController::class, 'index']);
    Route::get('/poli/{slug}', [PoliController::class, 'list']); 
    Route::get('/user', [UserViewController::class, 'index']);
    Route::get('/dokter', [DokterViewController::class, 'index']);
});

Route::get('/dokter-add', [DokterViewController::class, 'create']);
Route::post('/dokter-create', [DokterViewController::class, 'store']);
Route::get('/dokter-edit/{id}', [DokterViewController::class, 'edit']);

// Route::get('/user-add', [DokterViewController::class, 'create']);
Route::post('/user-create', [UserViewController::class, 'store']);
// Route::get('/user-edit/{id}', [DokterViewController::class, 'edit']);

