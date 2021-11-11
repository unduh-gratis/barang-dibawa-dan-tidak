<?php

namespace Database\Seeders;

use App\Models\RequiredProduct;
use Illuminate\Database\Seeder;

class RequiredSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            RequiredProduct::create([
                'product_id' => $i + 1
            ]);
        }
    }
}
