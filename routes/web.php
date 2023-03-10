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


/* ROTTA DB */





//rotte pagine

Route::get('/', function () {
    return view('home');
})->name('home');



Route::get('/personaggi', function(){
    return view('characters');
})->name('personaggi');

Route::get('/collezionabili', function(){
    return view('collectibles');
})->name('collezionabili');

Route::get('/fumetti', function(){

    $comics=config('db.comics');

    return view('comics', compact('comics'));
})->name('fumetti');



Route::get('/fans', function(){
    return view('fans');
})->name('fans');

Route::get('/giochi', function(){
    return view('games');
})->name('giochi');

Route::get('/film', function(){
    return view('movies');
})->name('film');

Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/shop', function(){
    return view('shop');
})->name('shop');

Route::get('/tv', function(){
    return view('tv');
})->name('tv');

Route::get('/video', function(){
    return view('videos');
})->name('video');

Route::get('/dettaglio-fumetto/{id}', function($id){

    /* prendo array che mi interessa */
    $comics = config('db.comics');
    $comics_get = array_filter($comics, fn($item) => $item['id'] == $id);
    $comic = $comics_get[array_key_first($comics_get)];

    return view('comic_detail', compact('comic'));
})->name('comic_detail');
