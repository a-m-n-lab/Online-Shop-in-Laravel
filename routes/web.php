<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

//Pas11/Lab12

//Route::get('/', 'App\Http\Controllers\ProductController@index'); 
//Route::resource('products', 'App\Http\Controllers\ProductController');// View/Modify/Create/Delete

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){ 
    Route::get('/', 'App\Http\Controllers\ProductController@home'); 
    Route::get('add-to-cart/{id}', 'App\Http\Controllers\StoreController@addToCart');//adaug in cos
    Route::resource('products', 'App\Http\Controllers\ProductController'); 
    }); 
    // 
Route::get('/prod', 'App\Http\Controllers\StoreController@index'); //afisare pagina produse (Add-Cart)
Route::get('cart', 'App\Http\Controllers\StoreController@cart'); //cos

Route::patch('update-cart', 'App\Http\Controllers\StoreController@update'); //modific cos
Route::delete('remove-from-cart', 'App\Http\Controllers\StoreController@remove');//sterg din cos

