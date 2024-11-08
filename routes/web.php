<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get(uri: 'kontak-kami', action: [HomeController::class, 'kontakKami'])->name('kontak-kami');

Route::get(uri: 'visi-misi', action: [HomeController::class, 'visiMisi'])->name('visi-misi');

Route::get(uri: 'tujuan-sasaran', action: [HomeController::class, 'tujuanSasaran'])->name('tujuan-sasaran');

Route::get(uri: 'struktur-organisasi', action: [HomeController::class, 'strukturOrganisasi'])->name('struktur-organisasi');

Route::get(uri: 'pegawai', action: [HomeController::class, 'pegawai'])->name('pegawai');
