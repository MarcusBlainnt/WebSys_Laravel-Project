<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('products')->insert(
            [
                'id'            => '7',
                'product_img'   =>'assets/img/img4.jpg',
                'product_name'  => 'Shades',
                'price'         =>'₱249',
                
            ]
        );
        DB::table('products')->insert(
            [
                'id'            => '8',
                'product_img'   =>'assets/img/img5.jpg',
                'product_name'  => 'Pants',
                'price'         =>'₱299',
                
            ]
        );
        DB::table('products')->insert(
            [
                'id'            => '9',
                'product_img'   =>'assets/img/img6.jpg',
                'product_name'  => 'Shoes',
                'price'         =>'₱249',
                
            ]
        );
        DB::table('products')->insert(
            [
                'id'            => '10',
                'product_img'   =>'assets/img/img4.jpg',
                'product_name'  => 'Shades',
                'price'         =>'₱249',
                
            ]
        );
        DB::table('products')->insert(
            [
                'id'            => '11',
                'product_img'   =>'assets/img/img5.jpg',
                'product_name'  => 'Pants',
                'price'         =>'₱299',
                
            ]
        );
        DB::table('products')->insert(
            [
                'id'            => '12',
                'product_img'   =>'assets/img/img6.jpg',
                'product_name'  => 'Shoes',
                'price'         =>'₱249',
                
            ]
        );
    }
}
