<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AccessController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

App::setLocale('es');

Route::get('/', function() {
    return view('home');
});
