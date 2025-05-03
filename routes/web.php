<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/todo/create', function () {
    return view('todo.create');
});

Route::get('/detail', function () {
    return view('auth.detail_tugas');Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/todo/create', function () {
    return view('todo.create');
})->name('todo.create');

Route::get('/detail', function () {
    return view('auth.detail_tugas');
})->name('detail');

Route::get('/simpan', function () {
    return view('auth.simpan');
})->name('simpan');

Route::get('/halaman', function () {
    return view('auth.halaman_akun');
})->name('halaman');
});

Route::get('/simpan', function () {
    return view('auth.simpan');
});

Route::get('/halaman', function () {
    return view('auth.halaman_akun');
});

