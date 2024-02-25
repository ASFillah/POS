<?php

namespace App\Http\Controllers\ProductsController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FoodBeverageController extends Controller
{
    public function foodBeverage(){
        return view('Products.foodBeverage');
    }
}
