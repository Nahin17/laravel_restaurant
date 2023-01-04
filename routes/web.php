<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controller\HomeController;
use App\Http\Controller\AdminController;

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

Route::get('/', function () {
    return view('welcome');
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



Route::get('/redirect', 'App\Http\Controllers\HomeController@login');

Route::get('/view_food', 'App\Http\Controllers\adminController@viewfood');
Route::post('/add_food', 'App\Http\Controllers\adminController@addfood');
