<?php

use Illuminate\Support\Facades\Route;
use App\Models\BookOldmodel;

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

Route::get('/about', function () {
   return view('about', ['nama' => 'Jati', 'kelas' => '10 PPLG 1']);
});

Route::get('/home', function () {
    return view('home');
});

Route::group(["prefix" => "/book"], function () {
    Route::get('/all', [\App\Http\Controllers\BookController::class, 'index']);
    Route::get('/detail/{book:nama}', [\App\Http\Controllers\BookController::class, 'show']);
    Route::get('/create', [\App\Http\Controllers\BookController::class, 'create']);
});

Route::group(["prefix" => "/publisher"], function () {
    Route::get('/all', [\App\Http\Controllers\PublisherController::class, 'index']);
    Route::get('detail/{publisher:nama}', [\App\Http\Controllers\PublisherController::class, 'show']);
});


