<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AbsensiController;


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
    return view('welcome');
});

Route::get('tampilan', function () {
    return view('tampilan');
})->name('tampilan');

Route::get('template', function () {
    return view('template');
})->name('template');

Route::get('login', function () {
    return view('login');
})->name('login');

// LOGIN
Route::post('login', [UserController::class,'show']);
Route::get('/daftar', [UserController::class, 'show']);
Route::post('/daftar/create', [UserController::class, 'create']);
Route::post('/auth', [UserController::class, 'auth']);
Route::get('/logout', [UserController::class, 'logout']);

// ADMINISTRATOR
// Route::middleware(['/auth'])->group(function (){

        Route::get('administrator', [AdminisController::class,'show']);
        Route::get('administrator/add', [AdminisController::class,'add']);
        Route::post('administrator/create', [AdminisController::class,'create']);
        Route::get('administrator/edit/{id_karyawan}', [AdminisController::class,'edit']);
        Route::post('administrator/update/{id_karyawan}', [AdminisController::class,'update']);
        Route::get('administrator/hapus/{id_karyawan}', [AdminisController::class,'hapus']);
        Route::get('administrator/cari', [AdminisController::class,'cari']);
// });

// ABSENSI
Route::get('absensi', [AbsensiController::class, 'show']);
Route::get('absensi/add', [AbsensiController::class, 'add']);
Route::post('absensi/create', [AbsensiController::class, 'create']);
Route::get('absensi/edit/{id}', [AbsensiController::class, 'edit']);
Route::post('absensi/update/{id}', [AbsensiController::class, 'update']);
Route::get('absensi/hapus/{id}', [AbsensiController::class, 'hapus']);

Route::get('template', [HomeController::class, 'show']);

Route::get('home1', [HomeController::class, 'home']);
Route::get('navbar', [HomeController::class, 'navbar']);
Route::get('absensi2', [HomeController::class, 'absensi']);
