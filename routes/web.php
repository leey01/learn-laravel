<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

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

Route::get('/book', [\App\Http\Controllers\BookController::class, 'index']);
Route::get('detail_book/{id}', [\App\Http\Controllers\BookController::class, 'show']);

Route::get('/publisher', function () {
    return view('publisher');
});
