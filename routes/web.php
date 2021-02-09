<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::middleware('auth')->group(function() {
    
    Route::get('catalog', [CatalogController::class, 'getIndex'])->name('catalog.index');
    
    Route::get('catalog/show/{id}', [CatalogController::class, 'getShow'])->name('catalog.show');
    
    Route::get('catalog/create', [CatalogController::class, 'getCreate'])->name('catalog.create');
    
    Route::get('catalog/edit/{id}', [CatalogController::class, 'getEdit'])->name('catalog.edit');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::post('catalog/create', [CatalogController::class, 'postCreate']);

    Route::put('catalog/edit/{id}', [CatalogController::class, 'putEdit']);

});

Auth::routes();

