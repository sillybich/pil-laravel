<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('profile', function () {
    $nama = 'fulan';
    // return view('profile', compact('nama'));
    return view('profile')->with('nama', $nama);
});

Route::get('array', function () {
    for ($i = 0; $i < 5; $i++) {
        echo 'Hello World ' . $i . ' x<br>';
    }
});
