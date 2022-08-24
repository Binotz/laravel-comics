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
    //importo i dati presenti in config/comics.php
    $series = config('comics');
    $data = [
        'series' => $series,
    ];
    return view('home', $data);

})->name('home');
