<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $productlist=Product::all();


        return view("product.index", [
            "miLista" => $productlist
        ]);
    }
    public function create(){
        $categories= Category::all();
        return view("product.create", [
            "categorias" => $categories
        ]);
    }

    public function store(Request $request){

        //validaciones
        $request->validate([
            "nombre" => "required|min:5|max:255",
            "descripcion" => "required",
            "precio" => "required|numeric", 
            "categoria" => "required|exists:categories,id",
            "foto" => "requiered"
        ]);




        $newProduct = new Product();
        $newProduct->name = $request->get("nombre");
        $newProduct->description = $request->get("descripcion");
        $newProduct->price = $request->get("precio");
        $newProduct->category_id = $request->get("categoria");
        
        if($request->hasFile("foto")){
            $ruta = $request->file("foto")->store("imagen", "public");
            $newProduct->image = $ruta;

        }else{
            $newProduct->image = "no hay ruta" ;
        }
        


        $newProduct->save();


        return redirect()->route("product.index");
    }



    public function show($id){
        return view("product.show");
    }
    
}
