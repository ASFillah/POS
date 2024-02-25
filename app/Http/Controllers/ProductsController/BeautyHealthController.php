<?php

namespace App\Http\Controllers\ProductsController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BeautyHealthController extends Controller
{
    public function beautyHealth(){
        return view('Products.beautyHealth');
    }
}
