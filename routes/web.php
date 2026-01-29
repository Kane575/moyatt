<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil', function () {
    return view('frontend.accueil');
});

Route::get('/gommage', function () {
    return view('frontend.gommage_gourmand');
});

Route::get('/propos', function () {
    return view('frontend.propos');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});

Route::get('/panier', function () {
    return view('frontend.panier');
});

Route::get('/compte', function () {
    return view('frontend.compte');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});

Route::get('/capillaire', function () {
    return view('frontend.produit_capilaires');
});

Route::get('/detail', function () {
    return view('frontend.detail');
});
Route::get('/routine', function () {
    return view('frontend.routine_visage');
});

Route::get('/savon', function () {
    return view('frontend.savon_surgra');
});
