<?php

use App\Models\Pelanggan;
use App\Models\Pembayaran;
use App\Models\Penggunaan;
use App\Models\Tagihan;
use App\Models\Tarif;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;
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

// Route::get('/', function () {
//     return view('index');
// });





Route::get('/', function () {
    return view('index', [
        'tarifs' => Tarif::all(),
        'pelanggans' => Pelanggan::all(),
        'penggunaans' => Penggunaan::all(),
        'pembayarans' => Pembayaran::all(),
        'tagihans' => Tagihan::all()
    ]);
})->middleware(['auth']);


Route::get('/dash_peng', function () {

    return view('dash_peng', [
        'tarifs' => Tarif::all(),
        'pelanggans' => Pelanggan::all(),
        'penggunaans' => Penggunaan::all(),
        'pembayarans' => Pembayaran::all(),
        'tagihans' => Tagihan::all()
    ]);
})->middleware(['auth']);

Route::get('/dash_tag', function () {

    return view('dash_tag', [
        'tarifs' => Tarif::all(),
        'pelanggans' => Pelanggan::all(),
        'penggunaans' => Penggunaan::all(),
        'pembayarans' => Pembayaran::all(),
        'tagihans' => Tagihan::all()
    ]);
})->middleware(['auth']);

Route::get('/dash_pem', function () {

    return view('dash_pem', [
        'tarifs' => Tarif::all(),
        'pelanggans' => Pelanggan::all(),
        'penggunaans' => Penggunaan::all(),
        'pembayarans' => Pembayaran::all(),
        'tagihans' => Tagihan::all()
    ]);
})->middleware(['auth']);

Route::get('/dash_taf', function () {

    return view('dash_taf', [
        'tarifs' => Tarif::all(),
        'pelanggans' => Pelanggan::all(),
        'penggunaans' => Penggunaan::all(),
        'pembayarans' => Pembayaran::all(),
        'tagihans' => Tagihan::all()
    ]);
})->middleware(['auth']);


Route::get('/login', function () {  return 'Halaman Login'; })->name('login');

Route::get('/user/{nama}', function ($name) {
    return view('user', ['name' => $name]);
});

Route::get('/register', function () { 
    return view('register'); 
})->name('register');

Route::POST('/action-register', 
    [AuthController::class, 'actionRegister']
);

Route::get('/login', [AuthController::class, 'loginView'])->name("login");

Route::POST('/action-login', 
    [AuthController::class, 'actionLogin']
);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index')->middleware(['auth']);
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create')->middleware(['auth']);
Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store')->middleware(['auth']);
Route::get('/pelanggan/read/{id}', [PelangganController::class, 'read'])->name('pelanggan.read')->middleware(['auth']);
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.update')->middleware(['auth']);
Route::post('/pelanggan/update', [PelangganController::class, 'update'])->middleware(['auth']);
Route::get('/pelanggan/hapus/{id}', [PelangganController::class, 'hapus'])->middleware(['auth']);