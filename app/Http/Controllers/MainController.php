<?php

namespace App\Http\Controllers;
use App\models\Products;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main.index',
        [ 
        'product'   => Products::all()
        ]
    );
    }
}
