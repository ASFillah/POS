<?php

namespace App\Http\Controllers\ProductsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BabyKidController extends Controller
{
    public function babyKid(){
        return view('Products.babyKid');
    }
}
