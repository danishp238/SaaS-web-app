<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Feature;
use App\Models\Package;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Danish',
            'email' => 'danish@example.com',
            'password' => bcrypt('123.321Aa'),
        ]);

        Feature::create([
            'image' => '',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'just a dummy feature to cal. sum of 2 numbers',
            'required_credits' => 1,
            'active' => true
        ]);

        Feature::create([
            'image' => '',
            'route_name' => 'feature2.index',
            'name' => 'Calculate difference',
            'description' => 'just a dummy feature to cal. difference of 2 numbers',
            'required_credits' => 3,
            'active' => true
        ]);

        Package::create([
            'name' => 'basic',
            'price' => 5,
            'credits' => 20,

        ]);

        Package::create([
            'name' => 'silver',
            'price' => 20,
            'credits' => 100,
            
        ]);

        Package::create([
            'name' => 'basic',
            'price' => 50,
            'credits' => 200,
            
        ]);
    }
}
