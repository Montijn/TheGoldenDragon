<?php

use App\Http\Controllers\CashDeskController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SpecialOfferController;
use App\Http\Controllers\TableController;
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

Route::get('/login', function () {
    return view('login');
});

Auth::routes();


Route::get('/contact', [ContactController::class, 'index']) ->name("contact");
Route::get('/favorite/add/{menuItemId}', [MenuController::class, 'addFavorite'])->name('favorite.add');
Route::get('/favorites', [MenuController::class, 'getFavorites'])->name('favorites');
Route::get('/favorite/remove/{menuItemId}', [MenuController::class, 'removeFavorite'])->name('favorite.remove');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/notification', [NotificationController::class, 'create'])->name('notification');

Route::resource('tables', TableController::class);

Route::resource('news', NewsController::class);

Route::resource('guests', GuestController::class);

Route::resource('menu', MenuController::class);

Route::resource('specialoffers', SpecialOfferController::class);

Route::get('/pdf', [MenuController::class, 'download'])->name('pdf');

Route::get('/cashdesk', [CashDeskController::class, 'index'])->name('cashdesk');
Route::get('/cashdesk/order/index', [CashDeskController::class, 'orderOverview'])->name('cashdesk.order.index');
Route::get('/cashdesk/order/create', [CashDeskController::class, 'orderCreate'])->name('cashdesk.order.create');
Route::get('/cashdesk/order/search', [CashDeskController::class, 'search'])->name('cashdesk.order.search');
Route::get('/cashdesk/order/create/{menuItemId}', [CashDeskController::class, 'addToOrder'])->name('cashdesk.order.addtoorder');
Route::post('/cashdesk/order/create', [CashDeskController::class, 'orderStore'])->name('cashdesk.order.store');
Route::get('/cashdesk/notifications', [NotificationController::class, 'index'])->name('cashdesk.notifications');
Route::post('/notification', [NotificationController::class, 'store'])->name('notification.store');





Route::get('/', function (){
    return view('website.homepage');
});
