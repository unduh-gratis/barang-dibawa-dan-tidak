<?php

namespace Database\Seeders;

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

        $users = \App\Models\User::all();
        foreach ($users as $user) {
            for ($i=0; $i < 10; $i++) {
                \App\Models\UserProduct::create([
                    'user_id' => $user->id,
                    'product_id' => random_int(1, 100),
                    'tanggal' => now()
                ]);
            }
        }
    }
}
