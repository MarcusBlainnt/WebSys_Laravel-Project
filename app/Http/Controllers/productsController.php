<?php

namespace App\Http\Controllers;

use App\models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view ('homepage',
        [ 
        'product'   => Products::list()
        ]
    );
    }
}
