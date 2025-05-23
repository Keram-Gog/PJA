<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['name' => 'Москва', 'country' => 'Россия'],
            ['name' => 'Санкт-Петербург', 'country' => 'Россия'],
            ['name' => 'Новосибирск', 'country' => 'Россия'],
            ['name' => 'Екатеринбург', 'country' => 'Россия'],
            ['name' => 'Казань', 'country' => 'Россия'],
            ['name' => 'Нижний Новгород', 'country' => 'Россия'],
            ['name' => 'Сочи', 'country' => 'Россия'],
            ['name' => 'Калининград', 'country' => 'Россия'],
            ['name' => 'Владивосток', 'country' => 'Россия'],
            ['name' => 'Красноярск', 'country' => 'Россия'],
            ['name' => 'Нью-Йорк', 'country' => 'США'],
            ['name' => 'Лондон', 'country' => 'Великобритания'],
            ['name' => 'Париж', 'country' => 'Франция'],
            ['name' => 'Берлин', 'country' => 'Германия'],
            ['name' => 'Токио', 'country' => 'Япония'],
            ['name' => 'Пекин', 'country' => 'Китай'],
            ['name' => 'Стамбул', 'country' => 'Турция'],
            ['name' => 'Дубай', 'country' => 'ОАЭ'],
            ['name' => 'Сидней', 'country' => 'Австралия'],
            ['name' => 'Рио-де-Жанейро', 'country' => 'Бразилия'],
        ];

        DB::table('cities')->insert($cities);
    }
}