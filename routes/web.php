<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

Route::get('/', function () {
    return view('index');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');


// ************************************admin panel ****************************************
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');

Route::get('/admin/login', [AdminHomeController::class, 'login'])->name('login');
// ************************************admin category ****************************************
Route::get('/admin/category', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'store'])->name('admin_category_store');
