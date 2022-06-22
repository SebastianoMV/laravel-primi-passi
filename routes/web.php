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

    $data =[
        'aiuto'=> ['Non', 'so', 'scrivere', 'php', 'HELP'],
    ];

    return view('home', $data);
})->name('home');

Route::get('/aiuto', function(){
    return view('aiuto');
})->name('aiuto');

Route::get('/hello', function(){
    return view('hello');
})->name('hello');
