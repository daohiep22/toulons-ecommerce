<?php

use App\Http\Controllers\addController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\mailController;
use App\Http\Controllers\productController;
use App\Http\Middleware\adminAuth;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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
// client
Route::get('/', [clientController::class, 'index']);
Route::get('/filtre/{type}/{brand}/{orderby}', [clientController::class, 'show']);
Route::post('search', [clientController::class, 'search']);
Route::get('productdetail/{name}', [clientController::class, 'product_detail']);
Route::post('add_to_cart/{product_id}', [clientController::class, 'add_to_cart'])->middleware('userAuth');
Route::get('add_to_cart_get/{product_id}', [clientController::class, 'add_to_cart_get'])->middleware('userAuth');
Route::get('login', [clientController::class, 'login']);
Route::get('userlogout', [clientController::class, 'logout'])->middleware('userAuth');
Route::post('signin', [clientController::class, 'signin']);
Route::get('cart', [clientController::class, 'cart'])->middleware('userAuth');
Route::get('delete_from_cart/{bill_id}', [clientController::class, 'delete_from_cart'])->middleware('userAuth');
Route::get('checkout', [clientController::class, 'checkout'])->middleware('userAuth');
Route::get('send_bill/{order_id}', [clientController::class, 'send_bill'])->middleware('userAuth');
Route::get('bill', [clientController::class, 'show_bill'])->middleware('userAuth');



// register
Route::get('register', function() {
    return view('client.register.form');
})->middleware('userAuth');
Route::post('registerpost-handle', [clientController::class, 'register_handle']);

Route::get('register-confirm', function() {
    return view('client.register.confirm');
})->middleware('userAuth');
Route::post('registerpost-final', [clientController::class, 'register_final']);



// forget-password
Route::get('forgot-password', function() {
    return view('client.resetpass.form');
})->middleware('userAuth');
Route::post('resetpost-email', [clientController::class, 'reset_checkmail']);

Route::get('reset-token', function() {
    return view('client.resetpass.token');
})->middleware('userAuth');
Route::post('resetpost-token', [clientController::class, 'reset_checktoken']);

Route::get('reset-final', function() {
    return view('client.resetpass.final');
})->middleware('userAuth');
Route::post('resetpost-final', [clientController::class, 'reset_final']);



// admin
Route::get('admin', [adminController::class, 'index']);
Route::post('login', [adminController::class, 'login']);
Route::get('dashboard', [adminController::class, 'dashboard'])->middleware('adminAuth');
Route::get('logout', [adminController::class, 'logout'])->middleware('adminAuth');
Route::post('adminsearch', [adminController::class, 'search'])->middleware('adminAuth');
Route::get('showuser', [adminController::class, 'show_user'])->middleware('adminAuth');
Route::get('bill_manager', [adminController::class, 'bill_manager'])->middleware('adminAuth');
Route::get('confirm/{order_id}', [adminController::class, 'confirm'])->middleware('adminAuth');
Route::get('show-body', [adminController::class, 'show_body'])->middleware('adminAuth');
Route::get('show-lens', [adminController::class, 'show_lens'])->middleware('adminAuth');

// add product
Route::get('add-body', [productController::class, 'add_body'])->middleware('adminAuth');
Route::get('add-lens', [productController::class, 'add_lens'])->middleware('adminAuth');

Route::post('save-body', [productController::class, 'save_body'])->middleware('adminAuth');
Route::post('save-lens', [productController::class, 'save_lens'])->middleware('adminAuth');
Route::post('save-product/{type}', [productController::class, 'save_product'])->middleware('adminAuth');

// edit and update product
Route::get('edit-product/{id}', [productController::class, 'edit_product'])->middleware('adminAuth');
Route::post('update-product/{id}', [productController::class, 'update_product'])->middleware('adminAuth');
Route::get('delete-product/{id}', [productController::class, 'delete_product'])->middleware('adminAuth');