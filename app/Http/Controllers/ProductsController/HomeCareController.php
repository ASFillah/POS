<?php

namespace App\Http\Controllers\ProductsController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeCareController extends Controller
{
    public function homeCare(){
        return view('Products.homeCare');
    }
}
