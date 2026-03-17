<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', HomeController::class);

// PRODUCTOS
Route::prefix('/product')->controller(ProductController::class)->group(function(){
    Route::get('/', "index")->name('product.index');
    Route::get('/create', "create");
    Route::post('/store', "store")->name('product.store');
    Route::get('/{id}', "show");
    Route::delete('/{product}', "destroy")->name('product.destroy');
});




Route::get('/cart', function () {
    return view('cart.index');
})->name('cart.index');


Route::post('/cart/add/{id}', function ($id) {

    $producto = Product::findOrFail($id);

    $cart = session()->get('cart', []);

    if(isset($cart[$id])){
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $producto->name,
            "price" => $producto->price,
            "image" => $producto->image,
            "quantity" => 1
        ];
    }

    session()->put('cart', $cart);

    return back();

})->name('cart.add');



Route::post('/cart/increase/{id}', function ($id) {
    $cart = session()->get('cart');

    if(isset($cart[$id])){
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
    }

    return back();
})->name('cart.increase');


Route::post('/cart/decrease/{id}', function ($id) {
    $cart = session()->get('cart');

    if(isset($cart[$id])){
        if($cart[$id]['quantity'] > 1){
            $cart[$id]['quantity']--;
        } else {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
    }

    return back();
})->name('cart.decrease');



Route::post('/cart/remove/{id}', function ($id) {
    $cart = session()->get('cart');

    if(isset($cart[$id])){
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return back();
})->name('cart.remove');


Route::prefix('/admin')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('categories', CategoryController::class);

});

Route::get('/admin', function () {
    return view('admin.dashboard');
});