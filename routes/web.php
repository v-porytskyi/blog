<?php

use App\Http\Controllers\Article;
use Illuminate\Support\Facades\Route;
use Modules\Core\Enums\RoutePath;

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
    return view('blog.pages.welcome');
})->name(RoutePath::BLOG_HOME_PAGE);
