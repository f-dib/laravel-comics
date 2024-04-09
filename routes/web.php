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

    $links = config("dbcomics.site.links");
    $comics = config("dbcomics.site.comic");
    $buy = config("dbcomics.site.buy");
    $footerlink1 = config("dbcomics.site.footerlink1");
    $footerlink2 = config("dbcomics.site.footerlink2");
    $social = config("dbcomics.site.social");

    return view('home', compact('links','comics', 'buy', 'footerlink1', 'footerlink2', 'social'));
})->name('home');

Route::get('/comic', function () {

    $links = config("dbcomics.site.links");
    $footerlink1 = config("dbcomics.site.footerlink1");
    $footerlink2 = config("dbcomics.site.footerlink2");
    $social = config("dbcomics.site.social");

    return view('comic', compact('links', 'footerlink1', 'footerlink2', 'social'));
})->name('comic');
