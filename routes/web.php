<?php



use Illuminate\Support\Facades\Route;

//import product controller
//make sure to use nmaespace to import and not file path
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('home');
  
}) -> name('home');



//attach controller to route
//name for hrefs
Route::get('/products', [ ProductController::class , 'index']) -> name("products.index");


//route to show forms for new product

Route::get('/products/create', [ ProductController::class, 'showForm']) -> name("products.create");


//route to submit of new product form and store data

Route::post('/products/store', [ ProductController::class, 'storeProduct']);



//route to view a specific product with id
//makes sure id is a number
Route::get('/products/{id}', [ ProductController::class , 'showProduct'])->whereNumber('id')->name('products.show');


//route to edit a product
//uses route model binding with id
//automatically gets product obj from id and sends to controller

//shows edit form with details filled in
//when submitted sends put request to products/id to be updated
Route::get('/products/{product}/edit', [ ProductController::class, 'editProduct'])->name('product.edit') ;


//put route to edit an existing product and save in db
//accept form output from previous route(proudct/edit)
//gets id of product to be updated and form input

Route::put('/products/{id}', [ ProductController::class, 'editPut']) -> name('product.editPut');