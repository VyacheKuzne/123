<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserCotroller;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\UserCatalogCotroller;


Route::get('/', function () {
    return view('pages/index');
});
Route::get('/log_in', function () {
    return view('pages/autotification/log_in');
});
Route::get('/sign_in', function () {
    return view('pages/autotification/sign_in');
});
Route::get('/user/cart', [UserCotroller::class, 'showCart']);

Route::get('/catalog', [UserCatalogCotroller::class, 'showCatalog']);

Route::get('/admin', [AdminController::class, 'showForm']);
    
Route::get('/library-man', [LibraryController::class, 'showFormBook']);
