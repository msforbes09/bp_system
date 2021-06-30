<?php

namespace Database\Seeders;

use App\Models\TransactionType;
use Illuminate\Database\Seeder;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Purchase', 'code' => 'PURCHASE', 'action' => 'purchase'],
            ['name' => 'Sale', 'code' => 'SALE', 'action' => 'sale'],
            ['name' => 'Open', 'code' => 'OPEN', 'action' => 'open'],
        ];

        foreach ($types as $type) {
            TransactionType::create($type);
        }
    }
}
