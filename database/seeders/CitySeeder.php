<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            [
                'id' => 1,
                'location_id' => 1,
                'city_name' => 'Edmonton'
            ],
            [
                'id' => 2,
                'location_id' => 1,
                'city_name' => 'Lethbridge'
            ],
            [
                'id' => 3,
                'location_id' => 1,
                'city_name' => 'Spruce Grove'
            ],

            [
                'id' => 4,
                'location_id' => 2,
                'city_name' => 'Mississauga'
            ],

            [
                'id' => 5,
                'location_id' => 2,
                'city_name' => 'Brampton'
            ],

            [
                'id' => 6,
                'location_id' => 2,
                'city_name' => 'Caledon'
            ],

            [
                'id' => 7,
                'location_id' => 2,
                'city_name' => 'Barrie'
            ],

            [
                'id' => 8,
                'location_id' => 2,
                'city_name' => 'Bradford'
            ],

            [
                'id' => 9,
                'location_id' => 2,
                'city_name' => 'Sarnia'
            ],
            [
                'id' => 10,
                'location_id' => 2,
                'city_name' => 'Woodstock'
            ],
            [
                'id' => 11,
                'location_id' => 2,
                'city_name' => 'Innisfil'
            ],
            [
                'id' => 12,
                'location_id' => 3,
                'city_name' => 'Charlottetown'
            ],
        ];

        foreach ($cities as $city) {
            $current = DB::table('cities')->where('id', $city['id'])->first();

            if (!$current) {
                City::insert($city);
            }
        }
    }
}
