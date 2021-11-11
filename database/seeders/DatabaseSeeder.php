<?php

namespace Database\Seeders;

use App\Models\RequiredProduct;
use App\Models\User;
use App\Models\UserProduct;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Product::factory(100)->create();

        $users = User::all();
        foreach ($users as $user) {
            for ($i=1; $i <= 5; $i++) {
                UserProduct::create([
                    'user_id' => $user->id,
                    'product_id' => $i,
                    'tanggal' => now()
                ]);
            }
        }

        for ($i=1; $i <= 10; $i++) {
            RequiredProduct::create([
                'product_id' => $i
            ]);
        }
    }
}
