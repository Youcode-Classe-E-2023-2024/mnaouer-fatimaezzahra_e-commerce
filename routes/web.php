<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('home',[HomeController::class,'index'])->name('home');

Route::get('ajoutProduct',[HomeController::class,'displayForm'])->name('product.form');
Route::get('ajoutProduct',[HomeController::class,'create'])->name('product.create');
Route::post('ajoutProduct',[HomeController::class,'store'])->name('product.store');

Route::get('edit-Product/{id}',[HomeController::class,'edit_Product'])->name('product.edit');
Route::put('update-Product',[HomeController::class,'update_Product'])->name('product.update');
