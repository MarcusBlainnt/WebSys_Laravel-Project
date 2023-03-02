<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class _Products{
    public static function list(){

        $products = [
            [
                'id'            => '1',
                'product_img'   =>'assets/img/img1.jpg',
                'product_name'  => 'T-shirt',
                'price'         =>'₱249.99',
                
            ],
            [
                'id'            => '2',
                'product_img'   =>'assets/img/img2.jpg',
                'product_name'  => 'Pants',
                'price'         =>'₱299.99',
                
            ],
            [
                'id'            => '3',
                'product_img'   =>'assets/img/img3.jpg',
                'product_name'  => 'Shoes',
                'price'         =>'₱249.99',
                
            ],
            [
                'id'            => '4',
                'product_img'   =>'assets/img/img4.jpg',
                'product_name'  => 'Jewelry',
                'price'         =>'₱249.99',
                
            ],
            [
                'id'            => '5',
                'product_img'   =>'assets/img/img5.jpg',
                'product_name'  => 'Eyeglasses',
                'price'         =>'₱249.99',
                
            ],
            [
                'id'            => '6',
                'product_img'   =>'assets/img/img6.jpg',
                'product_name'  => 'Headband',
                'price'         =>'₱249.99',
                
            ]
            ];
            return ($products);
    }
}
