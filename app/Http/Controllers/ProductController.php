<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Cache\RedisTagSet;

class ProductController extends Controller
{   
    
    
    //route to view all products
    public function index(){

        //uses pagination
        //only 2 at a time
        $products = Product::paginate(2);
        
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

        //if invalid id then page not found
        if($product === null){
            abort(404);
        }


        //render a page for the product with $id
        return view("products/showProduct", [
            'product' => $product
        ]);
    }


    //function to display edit form of a product

    public function editProduct(Product $product){

        return view('products.editProduct', [
            'product' => $product 
        ]);
    }



    //route to receive edited product details and save in db

    public function editPut(Request $req, string $id){

        $req->validate([
            'name' => ['required', 'max:100'],
            'price' => ['required'],

        ]);


        //find the product to be updated
        //update values from request
        $product = Product::find($id);

        $product->name = $req->name;
        $product->price = $req->price;

        $product->save();


        //redirect to all products
        return redirect()->route('products.index');
        
    }



    //function to delete a product

    public function destroy(string $id){

        $product = Product::find($id);


        $product->delete();

        return redirect() -> route('products.index') -> with('status', 'Product Deleted');

    }
}
