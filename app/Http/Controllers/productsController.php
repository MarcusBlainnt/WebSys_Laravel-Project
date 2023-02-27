<?php

namespace App\Http\Controllers;

use App\models\Products;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function index(){
        return view ('homepage',
        [ 
        'product'   => Products::all()
        ]
    );
    }
}
