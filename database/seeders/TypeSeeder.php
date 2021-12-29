<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['24', '36', '45', '54', '60', '70', '120'];

        foreach ($types as $type) {
            Type::create([
                'value' => $type
            ]);
        }
    }
}
