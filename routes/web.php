<?php

use App\Http\Controllers\ArcController;
use Illuminate\Support\Facades\Route;
use App\Models\Arc;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Me",
        "name" => "Cheryl Almeira",
        "email" => "cheryl.almeira@binus.ac.id",
        "image" => "me.jpeg"
    ]);
});

Route::get('/archive', [ArcController::class,'index']);

//halaman single post
Route::get('archive/{arc:slug}', [ArcController::class, 'show']);

