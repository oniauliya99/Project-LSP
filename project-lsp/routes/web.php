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
Route::get('/arsip/download/{id}', [ArsipController::class, 'download']);
Route::resource('/arsip', ArsipController::class);
Route::get('/about', function () {
    return view('pages.about');
});