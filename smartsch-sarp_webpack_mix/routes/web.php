<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\kategoryController;
use App\Http\Controllers\peminjaman;
use App\Http\Controllers\PengadaanController;
use App\Http\Controllers\ruanganController;
use App\Http\Controllers\unitkategoriController;
use App\Http\Controllers\wordController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function(){
    return view('welcome');
});
Route::resource('peminjaman', peminjaman::class);

Route::get('word', function(){
    return view('word');
});
Route::post('word', [App\Http\Controllers\wordController::class, 'index'])->name('word');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('barang/laporan', [App\Http\Controllers\barangController::class, 'laporan'])->name('barang.laporan');
Route::get('peminjaman/laporan', [App\Http\Controllers\peminjaman::class, 'show'])->name('peminjaman.laporan');
Route::get('/suratmasuk', [App\Http\Controllers\HomeController::class, 'suratmasuk'])->name('suratmasuk');
Route::get('barang/detail/{id}', [\App\Http\Controllers\barangController::class,'detail'])->name('barang.detail');
Route::resource('unitkategori', unitkategoriController::class);
Route::resource('kategory', kategoryController::class);
Route::resource('barang', barangController::class);
Route::resource('ruangan', ruanganController::class);
Route::resource('pengadaan', pengadaanController::class);
Route::put('peminjaman/{peminjaman}/edit', [peminjaman::class, 'update'])->name('peminjaman.edit');
Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
