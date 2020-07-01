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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/faq', function () {
    return view('faq');
})->name('domande-frequenti');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');
