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
        $this->call([
            CitySeeder::class,
            RegionSeeder::class,
            SectionSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
