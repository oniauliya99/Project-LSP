<?php

use App\Http\Controllers\ArsipController;
use App\Models\Arsip;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('pages.index',[
        'arsip' => Arsip::all()
    ]);
})->name('arsip');
Route::resource('/arsip', ArsipController::class);
Route::get('/about', function () {
    return view('pages.about');
})->name('about');