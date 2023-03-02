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
                'id'            => '1',
                'product_img'   =>'assets/img/img1.jpg',
                'product_name'  => 'T-shirt',
                'price'         =>'₱249',
                
            ]
        );
        DB::table('products')->insert(
            [
                'id'            => '2',
                'product_img'   =>'assets/img/img2.jpg',
                'product_name'  => 'Pants',
                'price'         =>'₱299',
                
            ]
        );
        DB::table('products')->insert(
            [
                'id'            => '3',
                'product_img'   =>'assets/img/img3.jpg',
                'product_name'  => 'Shoes',
                'price'         =>'₱249',
                
            ]
        );
    }
}
