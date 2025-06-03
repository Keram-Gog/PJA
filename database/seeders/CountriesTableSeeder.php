<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'Russia'],
            ['name' => 'USA'],
            ['name' => 'France'],
            ['name' => 'Germany'],
            ['name' => 'China'],
        ];
        
        DB::table('countries')->truncate();
        DB::table('countries')->insert($countries);
    }
}
