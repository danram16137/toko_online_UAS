<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'AIR JORDAN 1 X OFF-WHITE NRG "OFF WHITE UNC"',
                'brand'=>'Nike',
                'price'=>500000,
                'image'=>'products/1.jpg',
                'gender'=>'Female',
                'category'=>'Shoes',
                'quantity'=>1
            ],
            [
                'id'=>2,
                'name'=>'STUSSY X AIR ZOOM SPIRIDON CAGED "PURE PLATINUM"',
                'brand'=>'Nike',
                'price'=>600000,
                'image'=>'products/2.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes',
                'quantity'=>12
            ],
            [
                'id'=>3,
                'name'=>'SUPREME X AIR FORCE 1 LOW "BOX LOGO - WHITE"',
                'brand'=>'Nike',
                'price'=>625000,
                'image'=>'products/3.jpg',
                'gender'=>'Male',
                'category'=>'Shoes',
                'quantity'=>1
            ],
            [
                'id'=>4,
                'name'=>'SACAI X LDV WAFFLE "BLACK NYLON"',
                'brand'=>'Nike',
                'price'=>1000000,
                'image'=>'products/4.jpg',
                'gender'=>'Male',
                'category'=>'Shoes',
                'quantity'=>1
            ],
            [
                'id'=>5,
                'name'=>'AIR JORDAN 1 RETRO HIGH "SHATTERED BACKBOARD"',
                'brand'=>'Nike',
                'price'=>700500,
                'image'=>'products/5.jpg',
                'gender'=>'Male',
                'category'=>'Shoes',
                'quantity'=>14
            ],
            [
                'id'=>6,
                'name'=>'YEEZY BOOST 350 V2 "CREAM"',
                'brand'=>'Adidas',
                'price'=>650000,
                'image'=>'products/6.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes',
                'quantity'=>3
            ],
            [
                'id'=>7,
                'name'=>'YEEZY BOOST 350 V2"YECHEIL NON-REFLECT"',
                'brand'=>'Adidas',
                'price'=>725000,
                'image'=>'products/7.jpg',
                'gender'=>'Male',
                'category'=>'Shoes',
                'quantity'=>5
            ],
            [
                'id'=>8,
                'name'=>'YEEZY BOOST 350 V2 "FROZEN YELLOW"',
                'brand'=>'Adidas',
                'price'=> 300000,
                'image'=>'products/8.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes',
                'quantity'=>3
            ],
            [
                'id'=>9,
                'name'=>'AIR JORDAN 5 RETRO SP "MUSLIN"',
                'brand'=>'Nike',
                'price'=> 425000,
                'image'=>'products/9.jpg',
                'gender'=>'Male',
                'category'=>'Shoes',
                'quantity'=>3
            ],
            [
                'id'=>10,
                'name'=>'AIR JORDAN 1 RETRO HIGH ZOOM "RACER BLUE"',
                'brand'=>'Nike',
                'price'=> 920000,
                'image'=>'products/10.jpg',
                'gender'=>'Male',
                'category'=>'Shoes',
                'quantity'=>5
            ],
            [
                'id'=>11,
                'name'=>'FENTY SLIDE "PINK BOW "',
                'brand'=>'Puma',
                'price'=> 800000,
                'image'=>'products/11.jpg',
                'gender'=>'Female',
                'category'=>'Shoes',
                'quantity'=>3
            ],
            [
                'id'=>12,
                'name'=>'WMNS RS-X TRACKS "FAIR AQUA"',
                'brand'=>'Puma',
                'price'=> 450000,
                'image'=>'products/12.jpg',
                'gender'=>'Female',
                'category'=>'Shoes',
                'quantity'=>3
            ],
            [
                'id'=>13,
                'name'=>'OLD SKOOL \'BLACK WHITE\' "BLACK WHITE"',
                'brand'=>'Vans',
                'price'=> 575000,
                'image'=>'products/13.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes',
                'quantity'=>6
            ],
            [
                'id'=>14,
                'name'=>'OLD SKOOL "YACHT CLUB"',
                'brand'=>'Vans',
                'price'=> 565000,
                'image'=>'products/14.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes',
                'quantity'=>5
            ],
            [
                'id'=>15,
                'name'=>'VANS OLD SKOOL "RED CHECKERBOARD "',
                'brand'=>'Vans',
                'price'=> 899000,
                'image'=>'products/15.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes',
                'quantity'=>5
            ],
            [
                'id'=>16,
                'name'=>'ALL STAR 70S HI "MILK"',
                'brand'=>'Converse',
                'price'=> 640000,
                'image'=>'products/16.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes',
                'quantity'=>5
            ],
            [
                'id'=>17,
                'name'=>'ALL-STAR 70S HI "PLAY"',
                'brand'=>'Puma',
                'price'=> 854000,
                'image'=>'products/17.jpg',
                'gender'=>'Unisex',
                'category'=>'Shoes',
                'quantity'=>3
            ],
            [
                'id'=>18,
                'name'=>'FEAR OF GOD CHUCK 70 HI "NATURAL"',
                'brand'=>'Converse',
                'price'=> 735000,
                'image'=>'products/18.jpg',
                'gender'=>'Female',
                'category'=>'Shoes',
                'quantity'=>5
            ],
            

        ]);
    }
}