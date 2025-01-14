<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/data-sekolah', function () {
    return view('pages.data-sekolah');
});

Route::get('/data-barang', function () {
    return view('pages.data-barang');
});
