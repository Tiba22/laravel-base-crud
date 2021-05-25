<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TestController@home')
-> name('home');

Route::get('/ospite/{id}', 'TestController@ospite')
-> name('ospite');

Route::get('/addNewOspite', 'TestController@addNewOspite')
-> name('addNewOspite');

Route::post('/store', 'TestController@store')
-> name('store');
