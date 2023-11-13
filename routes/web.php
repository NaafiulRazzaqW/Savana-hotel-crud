<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home1Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Home1Controller::class, 'index']);
Route::get('/stay', [Home1Controller::class, 'bedroomlist']);
Route::get('/facilities', [Home1Controller::class, 'facilities']);
Route::get('/contactus', [Home1Controller::class, 'contactus']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);

Route::get('/tambahdata', [HomeController::class,'tambahdata'])->name('tambahdata');
Route::post('/insertdata', [HomeController::class,'insertdata'])->name('insertdata');

Route::get('/tampildata/{id}', [HomeController::class,'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}', [HomeController::class,'updatedata'])->name('updatedata');
