<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});

Route::resource('kategori',CategoryController::class)
->except('show','destroy','create');
