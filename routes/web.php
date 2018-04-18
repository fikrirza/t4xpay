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
// Auth::routes();

Route::get('/', function () { return view('auth.login'); })->name('login');
Route::get('/sign-in', function () { return view('auth.login-page'); })->name('login-page');
Route::get('/registrasi', function () { return view('auth.register'); })->name('registrasi');
Route::post('/registrasi', 'RegistrasiController@proses')->name('registrasi-submit');
Route::get('/registrasi/ceknik/{nik}', 'RegistrasiController@getNIK');

Route::get('/registrasi-sukses', function() { return view('auth.regis-sukses'); })->name('regis-sukses'); 
Route::get('/lupa-password', function () { return view('auth.lupa-password'); })->name('forgetpass');
Route::get('/lupa-passwords', function () { return view('auth.lupa-password-sukses'); })->name('forgetpass-sukses');


Route::get('/beranda', function() { return view('home.index'); })->name('beranda');

/* PENDAFTARAN PBB */
Route::get('/pendaftaran-pbb', function() { return view('pendaftaran.pbb'); })->name('pendaftaran-pbb');
Route::get('/pendaftaran-pbb-tambah', function() { return view('pendaftaran.pbb-tambah'); })->name('pendaftaran-pbb-tambah');

/* PEMBAYARAN PBB */
Route::get('/pembayaran-pbb', function() { return view('pembayaran.pbb'); })->name('pembayaran-pbb');
Route::get('/pembayaran-pbb-detil', function() { return view('pembayaran.pbb-detil'); })->name('pembayaran-pbb-detil');

/* PENDAFTARAN HOTEL */
Route::get('/pendaftaran-hotel', function() { return view('pendaftaran.hotel'); })->name('pendaftaran-hotel');
Route::get('/pendaftaran-hotel-tambah', function() { return view('pendaftaran.hotel-tambah'); })->name('pendaftaran-hotel-tambah');

/* PELAPORAN HOTEL */
Route::get('/pelaporan-hotel', function() { return view('pelaporan.hotel'); })->name('pelaporan-hotel');
Route::get('/pelaporan-hotel-detil', function() { return view('pelaporan.hotel-detil'); })->name('pelaporan-hotel-detil');
Route::get('/pelaporan-hotel-tambah', function() { return view('pelaporan.hotel-tambah'); })->name('pelaporan-hotel-tambah');




/* PENDAFTARAN RESTORAN */
Route::get('/pendaftaran-restoran', 'PendaftaranRestoranController@index')->name('pendaftaran-restoran');
Route::post('/pendaftaran-restoran', 'PendaftaranRestoranController@store')->name('pendaftaran-restoran-submit');
Route::get('/pendaftaran-restoran-tambah', function() { return view('pendaftaran.restoran-tambah'); })->name('pendaftaran-restoran-tambah');
Route::get('/pendaftaran-restoran-ubah', function() { return view('pendaftaran.restoran-ubah'); })->name('pendaftaran-restoran-ubah');
Route::post('/pendaftaran-restoran-ubah', 'PendaftaranRestoranController@update')->name('pendaftaran-restoran-update');


/* PELAPORAN RESTORAN */
Route::get('/pelaporan-restoran', function() { return view('pelaporan.restoran'); })->name('pelaporan-restoran');
Route::get('/pelaporan-restoran-detil', function() { return view('pelaporan.restoran-detil'); })->name('pelaporan-restoran-detil');
Route::get('/pelaporan-restoran-tambah', function() { return view('pelaporan.restoran-tambah'); })->name('pelaporan-restoran-tambah');


/* PEMBAYARAN RESTORAN */
Route::get('/pembayaran-restoran', function() { return view('pembayaran.restoran'); })->name('pembayaran-restoran');
Route::get('/pembayaran-restoran-detil', function() { return view('pembayaran.restoran-detil'); })->name('pembayaran-restoran-detil');
Route::get('/pembayaran-restoran-tambah', function() { return view('pembayaran.restoran-tambah'); })->name('pembayaran-restoran-tambah');



/* PEMBAYARAN */
Route::get('/transaksi-pembayaran', function() { return view('transaksi.index'); })->name('transaksi-pembayaran');
Route::get('/bukti-pembayaran', function() { return view('transaksi.bukti'); })->name('bukti-pembayaran');

Route::get('/transaksi-pembayaran-pbb', function() { return view('transaksi.index-pbb'); })->name('transaksi-pembayaran-pbb');
Route::get('/bukti-pembayaran-pbb', function() { return view('transaksi.bukti-pbb'); })->name('bukti-pembayaran-pbb');


/* PROFILE */
Route::get('/profile', function() { return view('profile.index'); })->name('profile');
