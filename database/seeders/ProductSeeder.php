<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ProductType::get();

        $products = [
            ['name' => 'Cattaleya Dinorado', 'code' => 'CATTALEYA_DINORADO', 'type' => 'RICE'],
            ['name' => 'Galaxy Dinorado', 'code' => 'GALAXY_DINORADO', 'type' => 'RICE'],
            ['name' => 'New Life Supreme', 'code' => 'NEW_LIFE_SUPREME', 'type' => 'RICE'],
            ['name' => 'Datu Maharlika', 'code' => 'DATU_MAHARLIKA', 'type' => 'RICE'],
            ['name' => 'Tamaraw', 'code' => 'TAMARAW', 'type' => 'RICE'],
            ['name' => 'Super Rice', 'code' => 'SUPER_RICE', 'type' => 'RICE'],
            ['name' => 'Royale Dinorado', 'code' => 'ROYALE_DINORADO', 'type' => 'RICE'],
            ['name' => 'Cherry Blossom', 'code' => 'CHERRY_BLOSSOM', 'type' => 'RICE'],
            ['name' => 'Island', 'code' => 'ISLAND', 'type' => 'RICE'],
            ['name' => 'Jasmine Blue', 'code' => 'JASMINE_BLUE', 'type' => 'RICE'],
            ['name' => 'Jasmine Tri-star', 'code' => 'JASMINE_TRI', 'type' => 'RICE'],
            ['name' => 'Magellan', 'code' => 'MAGELLAN', 'type' => 'RICE'],
            ['name' => 'Maharlika', 'code' => 'MAHARLIKA', 'type' => 'RICE'],
            ['name' => 'Manliclic', 'code' => 'MANLICLIC', 'type' => 'RICE'],
            ['name' => 'Fuji', 'code' => 'FUJI', 'type' => 'RICE'],
            ['name' => 'Sta. Rita', 'code' => 'STA_RITA', 'type' => 'RICE'],
            ['name' => 'Extra Large Egg', 'code' => 'XL_EGG', 'type' => 'CHICKEN_EGG'],
            ['name' => 'Large Egg', 'code' => 'L_EGG', 'type' => 'CHICKEN_EGG'],
            ['name' => 'Medium Egg', 'code' => 'M_EGG', 'type' => 'CHICKEN_EGG'],
            ['name' => 'Small Egg', 'code' => 'S_EGG', 'type' => 'CHICKEN_EGG'],
            ['name' => 'Ordinary Onion', 'code' => 'ONION', 'type' => 'ONION'],
            ['name' => 'Ordinary Garlic', 'code' => 'GARLIC', 'type' => 'GARLIC'],
            ['name' => 'Ordinary Cooking Oil', 'code' => 'COOKING_OIL', 'type' => 'COOKING_OIL'],
        ];

        foreach ($products as $product) {
            if ($type = $types->where('code', $product['type'])->first()) {
                $type->products()->create(collect($product)->only('name', 'code')->toArray());
            }
        }
    }
}
