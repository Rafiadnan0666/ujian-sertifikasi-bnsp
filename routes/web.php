<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Kursus;
use App\Models\Peserta;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KursusController;
use App\Http\Controllers\PesertaController;




Route::get('/', function () {
    $kursus = Kursus::all();
    return view('welcome', compact('kursus'));
});

Route::get('/dashboard', function () {
    $user = User::all();
    $peserta = Peserta::all();
    $kursus = Kursus::all();
    return view('dashboard', compact('user', 'kursus','peserta'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('user', UserController::class);
    Route::get('/kursus', [KursusController::class, 'index'])->name('kursus.index');
    Route::get('/kursus/create', [KursusController::class, 'create'])->name('kursus.create');
    Route::post('/kursus', [KursusController::class, 'store'])->name('kursus.store');
    Route::get('/kursus/{kursus}', [KursusController::class, 'show'])->name('kursus.show');
    Route::get('/kursus/{kursus}/edit', [KursusController::class, 'edit'])->name('kursus.edit');
    Route::put('/kursus/{kursus}', [KursusController::class, 'update'])->name('kursus.update');
    Route::delete('/kursus/{kursus}', [KursusController::class, 'destroy'])->name('kursus.destroy');
    Route::get('/peserta', [PesertaController::class, 'index'])->name('peserta.index');
    Route::get('/peserta/create', [PesertaController::class, 'create'])->name('peserta.create');
    Route::post('/peserta', [PesertaController::class, 'store'])->name('peserta.store');
    Route::get('/peserta/{peserta}', [PesertaController::class, 'show'])->name('peserta.show');
    Route::get('/peserta/{peserta}/edit', [PesertaController::class, 'edit'])->name('peserta.edit');
    Route::put('/peserta/{peserta}', [PesertaController::class, 'update'])->name('peserta.update');
    Route::delete('/peserta/{peserta}', [PesertaController::class, 'destroy'])->name('peserta.destroy');

});

require __DIR__ . '/auth.php';
