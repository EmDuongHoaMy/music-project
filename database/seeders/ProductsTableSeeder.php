<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Products;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i<50; $i++) { 
            Products :: create([
                'ten_sp'    =>$faker->sentence(2,3),
                'gia_sp'    =>30000,
                'sluong'    =>10,
                'mo_ta'      =>$faker->paragraph(23,true),
                'hinh_sp'   =>$faker->imageUrl(500,500,'shirt',true),
                'ngay_sx'   =>$faker->dateTime()
            ]);
        }
    }
}
