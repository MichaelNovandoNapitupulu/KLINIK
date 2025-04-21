<?php
// routes/web.php
// Route untuk halaman-halaman
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;

// Route untuk login dan register
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route untuk pasien
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

// Route untuk dokter
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

// Route untuk detail periksa Seeder
Route::get('/seed-detail-periksa', function () {
    Artisan::call('db:seed', ['--class' => 'DetailPeriksaSeeder']);
    return 'Detail Periksa Seeder has been executed!';
})->name('seed.detail.periksa');

Route::get('/pasien/dashboard', [PasienController::class, 'index'])->name('pasien.dashboard');
Route::get('/dokter/obat', [DokterController::class, 'index'])->name('dokter.obat');
Route::get('/obat', [DokterController::class, 'showObat'])->name('dokter.obat');
Route::post('/obat', [DokterController::class, 'storeObat'])->name('dokter.store.obat');
Route::get('/obat/edit/{id}', [DokterController::class, 'editObat'])->name('dokter.edit.obat');
Route::put('/obat/{id}', [DokterController::class, 'updateObat'])->name('dokter.update.obat');
Route::delete('/obat/{id}', [DokterController::class, 'destroyObat'])->name('dokter.destroy.obat');