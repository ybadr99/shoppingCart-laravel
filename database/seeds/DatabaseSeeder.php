<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(App\Product::class,5)->create();

        User::create([
            'name'=> 'yousef badr',
            'email'=> 'yousef@g.com',
            'password'=> bcrypt('123456'),
        ]);

        Product::create([
            'title' => 'Ipad',
            'price' => 249999,
            'image' =>'apple-ipad',
        ]);

        Product::create([
            'title' => 'Apple Watch',
            'price' => 249999,
            'image' =>'apple-watch',
        ]);

        Product::create([
            'title' => 'Grama phone',
            'price' => 249999,
            'image' =>'gramaphone',
        ]);

        Product::create([
            'title' => 'Head-Phone',
            'price' => 249999,
            'image' =>'head-phone',
        ]);
        Product::create([
            'title' => 'Iphone',
            'price' => 249999,
            'image' =>'iphone',
        ]);
        Product::create([
            'title' => 'MacBook Pro',
            'price' => 249999,
            'image' =>'macbook-pro',
        ]);
        Product::create([
            'title' => 'pimg-eah',
            'price' => 249999,
            'image' =>'pimg-eah',
        ]);
        Product::create([
            'title' => 'Iphone',
            'price' => 249999,
            'image' =>'iphone',
        ]);
        Product::create([
            'title' => 'Speaker',
            'price' => 249999,
            'image' =>'speaker',
        ]);

    }
}
