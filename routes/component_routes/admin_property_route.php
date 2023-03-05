<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/property/show', [PropertyController::class, 'PropertyListShow'])->name('admin.property.show');
Route::get('/admin/property/add', [PropertyController::class, 'PropertyListAdd'])->name('admin.property.add');
