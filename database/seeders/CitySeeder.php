<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'Moscow', 'country_id' => 1],
            ['name' => 'New York', 'country_id' => 2],
            ['name' => 'Paris', 'country_id' => 3],
            ['name' => 'Berlin', 'country_id' => 4],
            ['name' => 'Beijing', 'country_id' => 5],
        ];

        DB::table('cities')->insert($cities);
    }
}
