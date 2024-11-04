<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get(uri: 'kontak-kami', action: [HomeController::class, 'kontak'])->name('kontak-kami');