<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IdentitasController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserRegister;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::group(['prefix' => 'buku'], function () {
        Route::get('/', [BukuController::class, 'index'])->name('admin.buku');
        Route::post('/store', [BukuController::class, 'store'])->name('buku.store');
        Route::put('/update/{id}', [BukuController::class, 'update'])->name('buku.update');
        Route::delete('/delete/{id}', [BukuController::class, 'destroy'])->name('buku.delete');
    });
    Route::group(['prefix' => 'penerbit'], function () {
        Route::get('/', [PenerbitController::class, 'index'])->name('penerbit.index');
        Route::post('/store', [PenerbitController::class, 'store'])->name('penerbit.store');
        Route::put('/update/{id}', [PenerbitController::class, 'update'])->name('penerbit.update');
        Route::delete('/delete/{id}', [PenerbitController::class, 'destroy'])->name('penerbit.delete');
    });
    Route::group(['prefix' => 'anggota'], function () {
        Route::get('/', [AnggotaController::class, 'index'])->name('admin.anggota');
        Route::post('/store', [AnggotaController::class, 'store'])->name('anggota.store');
        Route::put('/update/{id}', [AnggotaController::class, 'update'])->name('anggota.update');
        Route::put('/verif/{id}', [AnggotaController::class, 'verif'])->name('anggota.verif');
        Route::delete('/delete/{id}', [AnggotaController::class, 'destroy'])->name('anggota.delete');
    });
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [AnggotaController::class, 'indexAdmin'])->name('admin.index');
        Route::post('/store', [AnggotaController::class, 'storeAdmin'])->name('admin.store');
        Route::put('/update/{id}', [AnggotaController::class, 'updateAdmin'])->name('admin.update');
        Route::delete('/delete/{id}', [AnggotaController::class, 'destroyAdmin'])->name('admin.delete');
    });
    Route::get('profile', [ProfileController::class, 'indexAdmin'])->name('admin.profile');
    Route::put('gambar', [ProfileController::class, 'updateAdmin'])->name('admin.update');
    Route::get('laporan', [LaporanController::class, 'index'])->name('admin.laporan');
    Route::get('cetak-laporan', [LaporanController::class, 'cetak_laporan'])->name('admin.cetak.laporan');
});

Route::prefix('user')->middleware(['auth', 'role:user'])->group(function () {

    Route::post('/register', [UserRegister::class, 'register'])->name('user.register');

    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->name('user.dashboard');

    Route::group(['prefix' => 'peminjaman'], function () {
        Route::get('/riwayat', [PeminjamanController::class, 'index'])->name('user.riwayat_peminjaman');
        Route::get('/form', [PeminjamanController::class, 'create'])->name('user.form_peminjaman');
        Route::post('/submit', [PeminjamanController::class, 'store'])->name('user.submit_peminjaman');
    });

    Route::group(['prefix' => 'pengembalian'], function () {
        Route::get('/riwayat', [PengembalianController::class, 'index'])->name('user.riwayat_pengembalian');
        Route::get('/form', [PengembalianController::class, 'create'])->name('user.form_pengembalian');
        Route::post('/submit', [PengembalianController::class, 'store'])->name('user.submit_pengembalian');
    });
    Route::get('profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::put('gambar', [ProfileController::class, 'update'])->name('user.update');
});
