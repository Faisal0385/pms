<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index.index');
})->name('admin.home');