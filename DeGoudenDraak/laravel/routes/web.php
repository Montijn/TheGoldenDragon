<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
/*S
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
})->name('home');


Route::get('/news', [NewsController::class, 'index']) ->name("news");
Route::get('/contact', [ContactController::class, 'index']) ->name("contact");
Route::get('/menu', [MenuController::class, 'index']) -> name("menu");
Route::get('/addmenuitem', [MenuController::class, 'create']) -> name("addmenuitem");

Route::resource('menuoverview', MenuController::class);

/*Route::get('/', function () {
    return view('login');
});*/

