<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController; 
use App\Http\Controllers\FoodsController; 


Route::get('home',[ProductsController::class,'detail']);
Route::get('/',[ Pagescontroller::class,'index']);
Route::get('/about',[ PagesController::class,'about'])->name('about');
Route::get('/posts',[ PostsController::class,'index']);
Route::resource('/foods',FoodsController::class);






















