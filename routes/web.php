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
    return '<center>
        <h1>Comming Soon...</h1>
        <p>We\'re online very soon.</p>
    </center>';
});

Route::get('/test', function () {
    return view('welcome');
});
