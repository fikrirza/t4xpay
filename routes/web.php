<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('auth.login'); })->name('login');
Route::get('/registrasi', function () { return view('auth.register'); })->name('registrasi');
Route::get('/registrasi-sukses', function() { return view('auth.regis-sukses'); })->name('regis-sukses'); 
Route::get('/lupa-password', function () { return view('auth.forgetpass'); })->name('forgetpass');


Route::get('/beranda', function() { return view('home.index'); })->name('beranda');

/* PENDAFTARAN PBB */
Route::get('/pendaftaran-pbb', function() { return view('pendaftaran.pbb'); })->name('pendaftaran-pbb');
Route::get('/pendaftaran-pbb-tambah', function() { return view('pendaftaran.pbb-tambah'); })->name('pendaftaran-pbb-tambah');


/* PENDAFTARAN HOTEL */
Route::get('/pendaftaran-hotel', function() { return view('pendaftaran.hotel'); })->name('pendaftaran-hotel');


/* PENDAFTARAN RESTORAN */
Route::get('/pendaftaran-restoran', function() { return view('pendaftaran.restoran'); })->name('pendaftaran-restoran');
Route::get('/pendaftaran-restoran-tambah', function() { return view('pendaftaran.restoran-tambah'); })->name('pendaftaran-restoran-tambah');


/* PELAPORAN RESTORAN */
Route::get('/pelaporan-restoran', function() { return view('pelaporan.restoran'); })->name('pelaporan-restoran');
Route::get('/pelaporan-restoran-detil', function() { return view('pelaporan.restoran-detil'); })->name('pelaporan-restoran-detil');
Route::get('/pelaporan-restoran-tambah', function() { return view('pelaporan.restoran-tambah'); })->name('pelaporan-restoran-tambah');


/* PEMBAYARAN RESTORAN */
Route::get('/pembayaran-restoran', function() { return view('pembayaran.restoran'); })->name('pembayaran-restoran');
Route::get('/pembayaran-restoran-detil', function() { return view('pembayaran.restoran-detil'); })->name('pembayaran-restoran-detil');
Route::get('/pembayaran-restoran-tambah', function() { return view('pembayaran.restoran-tambah'); })->name('pembayaran-restoran-tambah');


/* PEMBAYARAN RESTORAN */
Route::get('/transaksi-pembayaran', function() { return view('transaksi.index'); })->name('transaksi-pembayaran');
Route::get('/bukti-pembayaran', function() { return view('transaksi.bukti'); })->name('bukti-pembayaran');