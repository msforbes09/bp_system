<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Rice', 'code' => 'RICE'],
            ['name' => 'Chicken Egg', 'code' => 'CHICKEN_EGG'],
            ['name' => 'Onion', 'code' => 'ONION'],
            ['name' => 'Garlic', 'code' => 'GARLIC'],
            ['name' => 'Cooking Oil', 'code' => 'COOKING_OIL'],
        ];

        foreach ($types as $type) {
            ProductType::create($type);
        }
    }
}
