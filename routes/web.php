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