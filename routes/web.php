<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/',HomeController::class);

Route::prefix('/product')->group(function(){
    Route::get('/',"index");
    Route::get('/create', "create");
    Route::get('/{id}/{categoria?}', "show");
    
});

