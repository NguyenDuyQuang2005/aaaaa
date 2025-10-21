<?php

use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\UploadController;
use App\Http\Controllers\FrontendController;
use App\Models\order;
use Illuminate\Support\Facades\Route;
// admin
Route::get('/admin', function () {
    return view('admin.home');
});

//product
Route::get('/admin/product/create',[productController::class,'add_product']);
Route::post('/admin/product/add',[productController::class,'insert_product']);
Route::get('/admin/product/list',[productController::class,'list_product']);
Route::get('/admin/product/delete',[productController::class,'delete_product']);
Route::get('/admin/product/edit/{id}',[productController::class,'edit_product']);
Route::post('/admin/product/edit/{id}', [productController::class,'update_product']);


//order
Route::get('/admin/order/list',[orderController::class,'list_order']);
Route::get('/admin/order/details/{chitiet}',[orderController::class,'show_order']);
Route::delete('admin/order/delete/{id}', [orderController::class, 'delete_order']);


//image
Route::post('/upload',[UploadController::class,'uploadImage']);
Route::post('/uploads',[UploadController::class,'uploadImages']);

// front-end
Route::get('/',[FrontendController::class,'index']);
Route::get('/product/{id}', [FrontendController::class,'showproduct']);


// cart
Route::post('/cart/add', [FrontendController::class,'addcart']);
Route::get('/cart', [FrontendController::class,'showcart']);
Route::post('/cart/showcheck', [FrontendController::class,'showcheck']);
Route::get('/cart/remove/{id}', [FrontendController::class,'removecart']);
Route::post('/cart/send',[FrontendController::class,'cart_send']);

