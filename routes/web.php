<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $source = request('source');
    return view('login', ['source' => $source]);
});
