<?php

use App\Http\Controllers\CashDeskController;
use App\Http\Livewire\CashDesk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
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



Auth::routes();

Route::get('/', function () {
    return view('welcome');

})->name("home");

Route::get('/news', [NewsController::class, 'index']) ->name("news");
Route::get('/contact', [ContactController::class, 'index']) ->name("contact");


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cashdesk', [CashDeskController::class, 'index']);
