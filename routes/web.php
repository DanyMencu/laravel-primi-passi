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
    return view('homepage', [
        'title' => 'Hello Laravel',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adip...',
        'url_contact' => '/contact',
    ]);
});


Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Laravel contact',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adip...',
        'url_contact' => '/contact',
    ]);
});
