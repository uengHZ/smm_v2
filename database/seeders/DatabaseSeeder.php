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
        // \App\Models\User::factory(10)->create();
        $this->call(CreateKaryawanSeeder::class);
        $this->call(CreateItemSeeder::class);
        $this->call(CreateSliptypeSeeder::class);
        $this->call(CreateWhinventorySeeder::class);

    }
}
