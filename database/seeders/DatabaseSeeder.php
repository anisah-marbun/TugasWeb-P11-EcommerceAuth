<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
       Category::factory()->count(10)->create();

        Product::factory()->count(50)->create();
    }
}