<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create();
        for ($i=0; $i < 500 ; $i++) { 
        User::create([
            'name'      =>$faker->name(),
            'email'     =>$faker->unique()->safeEmail(),
            'address'   =>$faker->address(),
            'phone_number'=>$faker->phoneNumber(10),
            'password'  =>Hash::make('password')
        ]);
        }
        User::create([
            'name'      =>'Duong Viet',
            'email'     =>'duongviet@gmail.com',
            'password'  =>Hash::make('password')    
        ]);
    }
}
