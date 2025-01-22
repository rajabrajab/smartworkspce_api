<?php

use App\Models\Product;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
