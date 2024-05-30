<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'i18n' => json_encode(['en' => 'Residential', 'tr' => 'Konut']),
            'image' => 'residential.jpg',
            'status' => true,
            'sort_order' => 1,
        ]);
    }
}

