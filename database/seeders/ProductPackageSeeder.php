<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Seeder;

class ProductPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ProductType::get();

        $packages = [
            ['name' => '50kg Sack', 'code' => '50KG', 'type' => 'RICE', 'content' => 50],
            ['name' => '25kg Sack', 'code' => '25KG', 'type' => 'RICE', 'content' => 25],
            ['name' => '5kg Sack', 'code' => '5KG', 'type' => 'RICE', 'content' => 5],
            ['name' => 'Kg', 'code' => 'KG', 'type' => 'RICE', 'is_base' => true],
            ['name' => '1 Tray', 'code' => 'TRAY', 'type' => 'CHICKEN_EGG', 'content' => 30],
            ['name' => '1/2 Tray', 'code' => '1/2TRAY', 'type' => 'CHICKEN_EGG', 'content' => 15],
            ['name' => 'Pc', 'code' => 'PC', 'type' => 'CHICKEN_EGG', 'is_base' => true],
            ['name' => 'Kg', 'code' => 'KG', 'type' => 'ONION', 'is_base' => true],
            ['name' => 'Kg', 'code' => 'KG', 'type' => 'GARLIC', 'is_base' => true],
            ['name' => '1.5 Bottle', 'code' => '1.5BOTTLE', 'type' => 'COOKING_OIL', ],
            ['name' => 'Gin Bottle', 'code' => 'GIN_BOTTLE', 'type' => 'COOKING_OIL', ],
        ];

        foreach ($packages as $package) {
            if ($type = $types->where('code', $package['type'])->first()) {
                $type->packages()->create(collect($package)->only('name', 'code', 'content', 'is_base')->toArray());
            }
        }
    }
}
