<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'my_home']);


Route::get('/home',[HomeController::class,'index']);


Route::get('/add_food',[AdminController::class,'add_food']);


Route::post('/upload_food',[AdminController::class,'upload_food']);

Route::get('/view_food',[AdminController::class,'view_food']);

Route::get('/delete_food/{id}',[AdminController::class,'delete_food']);

Route::get('/update_food/{id}',[AdminController::class,'update_food']);

Route::post('/edit_food/{id}',[AdminController::class,'edit_food']);

Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

Route::get('/my_cart',[HomeController::class,'my_cart']);

Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);


Route::post('/confirm_order',[HomeController::class,'confirm_order']);


Route::get('/orders',[AdminController::class,'orders']);

Route::get('on_the_way/{id}',[AdminController::class,'on_the_way']);

Route::get('delivered/{id}',[AdminController::class,'delivered']);

Route::get('canceled/{id}',[AdminController::class,'canceled']);

Route::post('/book_table',[HomeController::class,'book_table']);

Route::get('/reservations',[AdminController::class,'reservations']);








Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
