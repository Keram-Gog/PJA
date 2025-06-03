<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CountriesTableSeeder::class,
            CitySeeder::class,
            PlatformSeeder::class,
            RoleSeeder::class,
            SkillSeeder::class,
            SpecializationSeeder::class,
            // \App\Models\User::factory(10)->create(),
        ]);
    }
}