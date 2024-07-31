<?php



use Illuminate\Support\Facades\Route;

//import product controller
//make sure to use nmaespace to import and not file path
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('home');
  
});



//attach controller to route
//name for hrefs
Route::get('/products', [ ProductController::class , 'index']) -> name("products.index");


//route to show forms for new product

Route::get('/products/create', [ ProductController::class, 'showForm']) -> name("products.create");


//route to submit of new product form and store data

Route::post('/products/store', [ ProductController::class, 'storeProduct']);



//route to view a specific product with id
//makes sure id is a number
Route::get('/products/{id}', [ ProductController::class , 'showProduct'])->whereNumber('id');