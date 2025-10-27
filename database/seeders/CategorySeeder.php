<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Necklaces',
            'Bracelets',
            'Earrings',
            'Anklets',
            'Rings',
            'Waist Beads',
            'Sets',
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate([
                'name' => $category,
                'slug' => \Str::slug($category),
            ]);
        }
    }
}
