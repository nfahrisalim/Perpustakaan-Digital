<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Import semua controller yang digunakan
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SumbangController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\AllbookController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\ReviewController;

// Redirect ke halaman login jika root diakses
Route::get('/', function () {
    return redirect('login');
});

// Rute autentikasi bawaan Laravel
Auth::routes();

// Dashboard setelah login
Route::get('/home', [DashboardController::class, 'index'])->name('home');

// Kelompok rute yang memerlukan autentikasi
Route::group(['middleware' => 'auth'], function () {

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index']);

    // Category
    Route::get('kategory', [CategoryController::class, 'index']);
    Route::get('kategory/edit/{id}', [CategoryController::class, 'edit']);
    Route::post('kategory/add', [CategoryController::class, 'store']);
    Route::put('kategory/edit/update/{id}', [CategoryController::class, 'update']);
    Route::delete('kategory/delete/{id}', [CategoryController::class, 'delete']);
    Route::get('category/book/{id}', [CategoryController::class, 'postbyCategory']);

    // Book
    Route::get('book', [BookController::class, 'index']);
    Route::get('book/add', [BookController::class, 'add']);
    Route::post('book/add/store', [BookController::class, 'store']);
    Route::get('book/detail/{id}', [BookController::class, 'detail']);
    Route::get('book/details/{id}', [BookController::class, 'details']);
    Route::get('book/read/{id}', [BookController::class, 'read']);
    Route::get('book/edit/{id}', [BookController::class, 'edit']);
    Route::put('book/edit/update/{id}', [BookController::class, 'update']);
    Route::delete('book/delete/{id}', [BookController::class, 'delete']);
    Route::get('book/verify/{id}', [BookController::class, 'verify']);

    // About
    Route::get('about', [AboutController::class, 'index']);

    // Sumbang
    Route::get('sumbang', [SumbangController::class, 'index']);
    Route::post('sumbang/add/store', [SumbangController::class, 'store']);

    // Chat
    Route::get('chat', [ChatController::class, 'index']);

    // All Books
    Route::get('books', [AllbookController::class, 'index']);

    // Search
    Route::post('/autocomplete/search', [AllbookController::class, 'livesearch'])->name('autocomplete.search');
    Route::get('search', [SearchController::class, 'search']);

    // Review
    Route::post('post/{post}/comment', [BookController::class, 'addreview'])->name('post.comment.add');

    // Anggota
    Route::get('anggota', [AnggotaController::class, 'index']);
    Route::get('anggota/add', [AnggotaController::class, 'add']);
    Route::post('anggota/add/store', [AnggotaController::class, 'store']);
    Route::get('anggota/edit/{id}', [AnggotaController::class, 'edit']);
    Route::put('anggota/ubahprofile', [AnggotaController::class, 'updateprofile']);
    Route::put('anggota/ubahpassword', [AnggotaController::class, 'updatepassword']);
    Route::get('profile', [AnggotaController::class, 'profile']);
    Route::delete('anggota/delete/{id}', [AnggotaController::class, 'delete']);

    // Review
    Route::get('review', [ReviewController::class, 'index']);
    Route::get('review/{id}', [ReviewController::class, 'review']);
    Route::delete('review/delete/{id}', [ReviewController::class, 'delete']);
    Route::post('balas/{post}/comment', [ReviewController::class, 'store'])->name('balas.review.store');
});

// Redirect ke dashboard setelah login
Route::get('/home', function () {
    return redirect('dashboard');
});

// Logout manual
Route::get('/keluar', function () {
    Auth::logout();
    return redirect('/');
});
