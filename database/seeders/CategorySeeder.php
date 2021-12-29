<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Modern', 'Kontemporer', 'Coastal', 'Eklektik', 'Maroko', 'Rustic', 'Skandinavian'];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => strtolower($category)
            ]);
        }
    }
}
