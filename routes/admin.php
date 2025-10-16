<?php

use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\UploadController;
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




Route::get('/admin/orderlist', function () {
    return view('admin.orderlist');
});
Route::get('/admin/orderdetails', function () {
    return view('admin.orderdetails');
});
Route::post('/upload',[UploadController::class,'uploadImage']);
Route::post('/uploads',[UploadController::class,'uploadImages']);