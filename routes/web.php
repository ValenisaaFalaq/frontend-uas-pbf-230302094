<?php

use App\Http\Controllers\PasienController;
use App\Http\Controllers\ObatController;

Route::resource('pasien', PasienController::class);
Route::resource('obat', ObatController::class);
