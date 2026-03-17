<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $productos = Product::all(); // 👈 trae productos de la BD
        return view('landing', compact('productos'));
    }
}