<?php

use App\Http\Controllers\Article;
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

Route::get('/articles', Article::class . '@index')->name('articles.list');
Route::get('/articles/create', Article::class . '@createForm')->name('articles.create.form');
Route::post('/articles', Article::class . '@store')->name('articles.store');

Route::get('/articles/{id}', Article::class . '@show')->name('articles.show');
