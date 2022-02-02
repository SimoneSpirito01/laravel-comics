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

    $comics = config('comics');
    $tags = config('tags');

    return view('home', ["comics" => $comics, "tags" => $tags]);
});

Route::get('/movies', function () {

    $comics = config('comics');
    $tags = config('tags');

    $movies = [];

    for($i = 0; $i < count($comics); $i++) {
        if($i % 2 == 0) {
            $movies[] = $comics[$i];
        }
    }

    return view('movies', ["movies" => $movies, "tags" => $tags]);
});

Route::get('/tv', function () {

    $comics = config('comics');
    $tags = config('tags');

    $tv = [];

    for($i = 0; $i < count($comics); $i++) {
        if(!($i % 2 == 0)) {
            $tv[] = $comics[$i];
        }
    }

    return view('tv', ["tv" => $tv, "tags" => $tags]);
});
