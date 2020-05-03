<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('cv');
});

Route::get('competence', function () {
    return view('competence');
});

Route::get('formation', function () {
    return view('formation');
});

Route::get('experience', function () {
    return view('experience');
});

Route::get('centre', function () {
    return view('centre');
});
