<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', [HomeController::class, 'index'])->name('dashboard');

Route::resource('mahasiswa', MahasiswaController::class);