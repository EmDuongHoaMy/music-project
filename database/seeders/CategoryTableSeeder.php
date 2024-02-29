<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use app\Models;
use App\Models\Category;
use Illuminate\Support\Testing\Fakes\Fake;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i <20 ; $i++) { 
            Category::create([
                'ma_tloai'  => $i+1,
                'ten_tloai' => $faker->sentence(2,true)
            ]);
        }
        Category::create([
            'ma_tloai'=> 22,
            'ten_tloai'=>'Nhac Tre'
        ]);
    }
}
