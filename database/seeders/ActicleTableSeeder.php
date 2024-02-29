<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use app\Models;
use App\Models\Acticle;

class ActicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i <20 ; $i++) { 
            Acticle::create([
                'ma_bviet'  => $i+1,
                'tieude'    => $faker->sentence(10,true),
                'ten_bhat'  => $faker->sentence(5,true),
                'ma_tloai'  => $faker->numberBetween(1,5),
                'tomtat'    => $faker->paragraph(1,5),
                'noidung'   => $faker->paragraph(3,true),
                'ma_tgia'   => $faker->numberBetween(1,10),
                'hinhanh'   => $faker->imageUrl(500,500,'people',true)
            ]);
        }
    }
}
