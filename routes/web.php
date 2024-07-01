<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return 'Selamat Datang di Website App Puskesmas';
});


Route::get('/profil', function () {
    return view('profil');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/dashboard', [DashboardController::class, 'show']);
Route::get('/dashboard/laporan', [DashboardController::class, 'laporan']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
