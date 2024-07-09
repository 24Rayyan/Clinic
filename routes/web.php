<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\PasienController;

Route::get('/', [ClinicController::class, 'dashboard'])->name('dashboard');
Route::get('/data', [ClinicController::class, 'index'])->name('pasiens.index');
Route::get('/search', [ClinicController::class, 'search'])->name('pasiens.search');
Route::get('/createdata', [ClinicController::class, 'create'])->name('createdata');
Route::post('/pasiens', [ClinicController::class, 'store'])->name('pasiens.store');
Route::get('/pasiens/{pasien}', [ClinicController::class, 'show'])->name('pasiens.show');
Route::get('/choose-poli/{pasien}', [ClinicController::class, 'choosePoli'])->name('pilihpoli');
Route::post('/antrian/store', [ClinicController::class, 'choose'])->name('antrian.store');
Route::get('posts', [ClinicController::class, 'search'])->name('pasiens.index');
Route::get('posts/search', [ClinicController::class, 'search'])->name('pasiens.search');




//Antrian Controller
Route::get('/Antrian/Anak', [AntrianController::class, 'anak'])->name('Antrian.Anak');
Route::get('/Antrian/Mata', [AntrianController::class, 'mata'])->name('Antrian.Mata');
Route::get('/Antrian/Spesialis', [AntrianController::class, 'spesialis'])->name('Antrian.Spesialis');
Route::get('/Antrian/THT', [AntrianController::class, 'tht'])->name('Antrian.THT');
Route::get('/Antrian/Umum', [AntrianController::class, 'umum'])->name('Antrian.Umum');
Route::get('/keterangan/{id}', [AntrianController::class, 'create'])->name('add.keterangan');
Route::post('/keterangan/store', [AntrianController::class, 'push'])->name('store.keterangan');
Route::get('/dashboard', [AntrianController::class, 'index'])->name('dashboard');
Route::post('/next/{poli}', [AntrianController::class, 'nextNomorAntrian'])->name('next');
Route::post('/reset-queue', [AntrianController::class, 'resetQueue'])->name('resetQueue');

//Pasien Controller
Route::get('/pasiens/{pasien}/edit', [PasienController::class, 'edit'])->name('pasiens.edit');
Route::put('/pasiens/{pasien}', [PasienController::class, 'update'])->name('pasiens.update');
Route::delete('/pasiens/{pasien}', [PasienController::class, 'destroy'])->name('pasiens.destroy');

//Truncate
Route::delete('/restore/mata', [PasienController::class, 'truncateMata'])->name('restoreMata');
Route::delete('/restore/spesialis', [PasienController::class, 'truncateSpesialis'])->name('restoreSpesialis');
Route::delete('/restore/umum', [PasienController::class, 'truncateUmum'])->name('restoreUmum');
Route::delete('/restore/anak', [PasienController::class, 'truncateAnak'])->name('restoreAnak');
Route::delete('/restore/tht', [PasienController::class, 'truncateTHT'])->name('restoreTHT');


//View Antrian
Route::post('/THT', [AntrianController::class, 'AntrianTHT'])->name('AntrianTHT');
