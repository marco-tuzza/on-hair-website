<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
});

Route::get('/servizi', function () {
    return view('servizi');
});

Route::get('/prodotti-theos', function () {
    return view('prodotti-theos');
});

Route::get('/listino-prezzi', function () {
    return view('listino-prezzi');
});

Route::get('/contattaci', function () {
    return view('contattaci');
});
