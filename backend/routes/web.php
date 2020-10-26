<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
Route::get('/shops', [ShopController::class, 'index'])->name('shop.list');
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.detail');

Route::get('/', function () {
    return redirect('/shops');
});
