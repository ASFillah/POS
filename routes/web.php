<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeCareController;
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
    Route::get('/foodBeverage', [FoodBeverageController::class, 'index']);
    Route::get('/beautyHealth', [BeautyHealthController::class, 'index']);
    Route::get('/homeCare', [HomeCareController::class, 'index']);
    Route::get('babyKid', [BabyKidController::class, 'index']);
});