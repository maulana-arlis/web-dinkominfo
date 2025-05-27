<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewNewsContoller;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/detail', function () {
    return view('detail');
});
Route::get('/berita', [ViewNewsContoller::class, 'index'])->name('berita');
Route::get('/berita/{slug}', [ViewNewsContoller::class, 'show'])->name('berita.show');

// Login & Logout
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');

// Grup dengan middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', function () {
        return view('profile.index');
    })->name('profile');

    Route::get('/profile/edit', function () {
        return view('profile.edit');
    })->name('profile.edit');

    Route::put('/profile', [UserController::class, 'editProfile'])->name('profile.update');

    Route::post('/news/upload-image', [NewsController::class, 'uploadImage'])->name('news.uploadImage');

    Route::middleware(['role:super_admin'])->group(function () {
        // index
        Route::get('/users', [UserController::class, 'index'])->name('users.index');

        // create
        Route::get('/users/create', function () {
            return view('users.create');
        })->name('users.create');
        Route::post('/users', [UserController::class, 'createUser'])->name('users.store');

        // edit
        Route::get('/users/{user}/edit', [UserController::class, 'editUser'])->name('users.edit');
        Route::put('/users/{user}', [UserController::class, 'updateUser'])->name('users.update');

        // delete
        Route::delete('/users/{user}', [UserController::class, 'deleteUser'])->name('users.destroy');
    });

    // perizinan
    Route::resource('services', ServiceController::class);
    // berita
    Route::resource('news', NewsController::class);
    // faq
    Route::resource('faqs', FaqController::class);
    // profil pejabat
    Route::resource('profiles', ProfileController::class);
    // kontak
    Route::resource('contacts', ContactController::class);
});
