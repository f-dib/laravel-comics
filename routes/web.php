<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $links = ['Characters','Comics','Movies','Tv','Games','Collectibles','Videos','Fans','News','Shop'];
    $comics = config("dbcomics.comic");

    return view('home', compact('links','comics'));
})->name('home');
