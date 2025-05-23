<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CitySeeder::class,
            PlatformSeeder::class,
            RoleSeeder::class,
            SkillSeeder::class,
            SpecializationSeeder::class,
            // \App\Models\User::factory(10)->create(),
        ]);
    }
}