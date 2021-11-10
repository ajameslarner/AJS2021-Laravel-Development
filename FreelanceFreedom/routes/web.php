<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;

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

//Laravel Authentication Routes
Auth::routes();

//Get index page, without middleware restrictions
Route::get('/', [PagesController::class, 'index']);

//Get aboute page, without middleware restrictions
Route::get('/about', [PagesController::class, 'about']);

//Get listings resource but excluding the index and show functions from the authenticated middleware
Route::resource('/listings', ListingsController::class)
    ->except(['index','show'])
    ->middleware('auth');

//Get listings resource but only including the index and show functions that have been excluded from the authenticated middleware
Route::resource('/listings', ListingsController::class)
    ->only(['index', 'show']);

//Grouped routes for logged in users, with redirect from root auth page
Route::group(['middleware' => 'auth'], function() {
    Route::redirect('/auth', '/auth/profile');
    Route::get('/auth/profile', [ProfileController::class, 'profile']);
});

//Grouped routes to allow admin tasks.
Route::group(['middleware' => 'adminCheck', 'prefix' => 'auth'], function() {
    Route::get('/dashboard', [ProfileController::class, 'dashboard']);
    Route::resource('/dashboard/users', UsersController::class);
});





