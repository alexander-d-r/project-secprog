<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/products', function () {
//     return view('products');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/', 'DashboardController@index')->name('home');
Route::get('/about', 'DashboardController@about')->name('about');
Route::get('/products', 'DashboardController@products')->name('products');
Route::get('/contact', 'DashboardController@contact')->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class,'redirect']);