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

Route::get('/', function () {
    return view('home');
})-> name("homepage");

Route::get('/comics', function () {
    $comics = config("comics");
    return view('comics', compact('comics'));
})-> name("comics");


Route::get('/comics/{param}', function ($id) {
    $comics = config("comics");

    $comic = null;
    foreach($comics as $item){
        if($item["id"] == $id){
            $comic = $item;
        }
    }


    return view('detail_comic', compact('comic'));
})-> name("detail-comic");













// Route::get('/', function () {
//     return view('characters');
// })-> name("characters");

// Route::get('/', function () {
//     return view('movies');
// })-> name("movies");

// Route::get('/', function () {
//     return view('tv');
// })-> name("tv");

// Route::get('/', function () {
//     return view('games');
// })-> name("games");

// Route::get('/', function () {
//     return view('collectibles');
// })-> name("collectibles");

// Route::get('/', function () {
//     return view('videos');
// })-> name("videos");

// Route::get('/', function () {
//     return view('fans');
// })-> name("fans");

// Route::get('/', function () {
//     return view('news');
// })-> name("news");

// Route::get('/', function () {
//     return view('shop');
// })-> name("shop");


