<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// View routes for the normal website
Route::get('/', function (){
    return view('website.homepage');
});
Route::get('/menu', [\App\Http\Controllers\MenuController::class, 'show'])->name('menu');
Route::get('/pdf', [\App\Http\Controllers\PdfController::class, 'download']);


// Admin routes
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'show'])->name('admin');

// Tablet view
Route::get('/tablet', [\App\Http\Controllers\TabletController::class, 'show']);

