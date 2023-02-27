<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products{
    public static function all(){

        $products = [
            [
                'id'            => '1',
                'product_img'   =>'public\assets\img',
                'product_name'  => 'AdodotT-shirt',
                'price'         =>'₱249.99',
                
            ],
            [
                'id'            => '2',
                'product_img'   =>'public\assets\img',
                'product_name'  => 'AwraPants',
                'price'         =>'₱299.99',
                
            ],
            [
                'id'            => '3',
                'product_img'   =>'public\assets\img',
                'product_name'  => 'ConviShoes',
                'price'         =>'₱249.99',
                
            ],
            [
                'id'            => '4',
                'product_img'   =>'public\assets\img',
                'product_name'  => 'Creatiwelry',
                'price'         =>'₱249.99',
                
            ],
            [
                'id'            => '5',
                'product_img'   =>'public\assets\img',
                'product_name'  => 'Eueglasses',
                'price'         =>'₱249.99',
                
            ],
            [
                'id'            => '6',
                'product_img'   =>'public\assets\img',
                'product_name'  => 'Craxy Headbal',
                'price'         =>'₱249.99',
                
            ]
            ];
            return ($products);
    }
}
