<?php

use App\Http\Controllers\PoliController;
use App\Http\Controllers\UserViewController;
use App\Http\Controllers\DokterViewController;
use App\Http\Controllers\CrudController;
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
    return view('welcome', [
            "title" => "Welcome"
    ]);
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

