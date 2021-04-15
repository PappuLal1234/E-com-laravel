<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([ [
            'name'=>'oppoo',
            'price'=>'200',
            'description'=>"A asteroid_brown with 4acre range and much more feacher",
            'category'=>"asteroid",
            "gallery"=>"http://commondatastorage.googleapis.com/codeskulptor-assets/gutenberg.jpg",
        ],
        [
            'name'=>'Laravel++',
            'price'=>'200',
            'description'=>"A asteroid_brown with 4acre range and much more feacher",
            'category'=>"asteroid",
            "gallery"=>"http://commondatastorage.googleapis.com/codeskulptor-demos/riceracer_assets/img/car_2.png ",
        ],
        [
            'name'=>'PHP+',
            'price'=>'200',
            'description'=>"A asteroid_brown with 4acre range and much more feacher",
            'category'=>"asteroid",
            "gallery"=>"http://commondatastorage.googleapis.com/codeskulptor-assets/lathrop/shot3.png ",
    ]]) ;
    }
}
