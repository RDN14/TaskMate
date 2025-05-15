<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome-taskmate');
// });

// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

// Route::get('/todo/create', function () {
//     return view('todo.create');
// });

// Route::get('/todo/detail', function () {
//     return view('todo.detail_tugas');
// });

// Route::get('/todo/create', function () {
//     return view('todo.create');
// })->name('create');

// Route::get('/todo/detail', function () {
//     return view('todo.task_detail');
// })->name('detail');

// Route::get('/todo/edit.task', function () {
//     return view('todo.edit_task');
// })->name('edit');

// Route::get('/todo/simpan', function () {
//     return view('todo.simpan');
// })->name('simpan');

// Route::get('/todo/halaman', function () {
//     return view('todo.halaman_akun');
// })->name('halaman');

// Route::get('/todo/homepage', function () {
//     return view('todo.homepage');
// })->name('homepage');

// Route::get('/todo/halaman_akun', function () {
//     return view('todo.halaman_akun');
// })->name('profil');


Route::get('/', [Authcontroller::class, 'welcome'])->name('register');
Route::get('/login', [Authcontroller::class, 'login'])->name('login');

Route::get('/register', [Authcontroller::class, 'register'])->name('register');


Route::get('/home', [TodoController::class, 'home'])->name('home');
Route::get('/create', [TodoController::class, 'create'])->name('create');
Route::get('/edit', [TodoController::class, 'edit'])->name('edit');
Route::get('/detail', [TodoController::class, 'detail'])->name('detail');
Route::get('/akun', [TodoController::class, 'akun']);