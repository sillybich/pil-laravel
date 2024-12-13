<?php

use App\Http\Controllers\mahasiswaController;
use Illuminate\Support\Facades\Route;

Route::resource('mahasiswa', mahasiswaController::class);
