<?php

// Admin Namespace
// use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminBukuController;
use App\Http\Controllers\Admin\AdminKategoriController;
use App\Http\Controllers\Admin\AdminRakController;
use App\Http\Controllers\Admin\AdminAnggotaController;
// use App\Http\Controllers\Admin\AdminRakController;

use Illuminate\Support\Facades\Storage;


// Controller Namespace 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
// use Illuminate\Support\Facades\URL;
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
    return view('pages.auth.home', [
        "title" => "Home",
        "active" => 'home'  
 
    ]);
});

Route::get('/home', function () {
    return view('pages.auth.home', [
        "title" => "Home",
        "active" => 'home'  
 
    ]);
});

// AUTH
Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'create']);
// AUTH

Route::prefix('admin')
    // ->middleware(['auth', 'admin'])
    ->namespace('Admin')
    ->group(function() {
        Route::get('/dashboard',[AdminDashboardController::class,'index'])->name('admin-dashboard');
        Route::get('/books/{id}/show_pdf',[AdminBukuController::class,'show_pdf']);

        Route::resource('anggota', 'AdminAnggotaController');
        Route::resource('books', 'AdminBukuController');
        Route::resource('category', 'AdminKategoriController');
        Route::resource('raks', 'AdminRakController');
        Route::resource('peminjaman', 'AdminPeminjamanController');
        Route::resource('pengembalian', 'AdminPengembalianController');
    });

