<?php

use App\Http\Controllers\ProductsController\BabyKidController;
use App\Http\Controllers\ProductsController\BeautyHealthController;
use App\Http\Controllers\ProductsController\FoodBeverageController;
use App\Http\Controllers\ProductsController\HomeCareController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [HomeController::class, 'home']);

Route::prefix('category')->group(function(){
    Route::get('/foodBeverage', [FoodBeverageController::class, 'foodBeverage']);
    Route::get('/beautyHealth', [BeautyHealthController::class, 'beautyHealth']);
    Route::get('/homeCare', [HomeCareController::class, 'homeCare']);
    Route::get('/babyKid', [BabyKidController::class, 'babyKid']);
});