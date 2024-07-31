<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{   //route to view all products
    public function index(){
        $products = Product::all();
        
        return view('products/index', [
            'products' => $products
        ]);
    }
    //route to show form for new product
    public function showForm(){
        return view('products.create');
    }


    //route to store new product from form data

    public function storeProduct(Request $req){

        //form validation

        $req->validate([
            'name' => ['required', 'max:100'],
            'price' => ['required'],

        ]);




        $product = new Product;

        //create product object to be inserted into db
        $product->name = $req->name;
        $product->price = $req->price;

        $product->save();

        //go ot products home page to view all products
        return redirect()->route('products.index');
    }



    //handler for viewinga specific product

    public function showProduct(string $id){
        //get product with id from url params
        $product = Product::find($id);


        //render a page for the product with $id
        return view("products/showProduct", [
            'product' => $product
        ]);
    }
}
