<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\products;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/addProduct', [products::class, 'addProdPage']);

Route::post('/productAdded',[products::class, 'addProduct']);

Route::get('/allProducts', [products::class, 'allProductsPage']);

Route::get('/updateProduct/{id}', [products::class, 'updateProductPage']);

Route::post('/productUpdated/{id}', [products::class, 'updateProduct']);

Route::get('/deleteProduct/{id}', [products::class, 'deleteProduct']);