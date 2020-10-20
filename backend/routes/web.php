<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
Route::get('/shops', [ShopController::class, 'index'])->name('shop.list');

Route::get('/', function () {
    return redirect('/shops');
});
