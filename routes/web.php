<?php

// routes/web.php
// Route untuk halaman-halaman
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::prefix('pasien')->group(function () {
    Route::get('/dashboard', function () {
        return view('pasien.dashboard');
    })->name('pasien.dashboard');

    Route::get('/periksa', function () {
        return view('pasien.periksa');
    })->name('pasien.periksa');

    Route::get('/riwayat', function () {
        return view('pasien.riwayat');
    })->name('pasien.riwayat');
});

Route::prefix('dokter')->group(function () {
    Route::get('/dashboard', function () {
        return view('dokter.dashboard');
    })->name('dokter.dashboard');

    Route::get('/periksa', function () {
        return view('dokter.periksa');
    })->name('dokter.periksa');

    Route::get('/obat', function () {
        return view('dokter.obat');
    })->name('dokter.obat');
});

