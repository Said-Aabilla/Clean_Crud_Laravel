<?php

use App\City;
use Illuminate\Database\Seeder;

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
            [
                'id'    => '1',
                'name' => 'Oujda',
            ],
            [
                'id'    => '2',
                'name' => 'Fes',
            ],
            [
                'id'    => '3',
                'name' => 'Kenitra',
            ],
            [
                'id'    => '4',
                'name' => 'Martil',
            ],
            [
                'id'    => '5',
                'name' => 'Laayoune',
            ],
            [
                'id'    => '6',
                'name' => 'Marrakech',
            ],
            [
                'id'    => '7',
                'name' => 'Tanger',
            ],
            [
                'id'    => '8',
                'name' => 'Agadir',
            ],
            [
                'id'    => '9',
                'name' => 'Casa Blanca',
            ],
            [
                'id'    => '10',
                'name' => 'Rabat',
            ],
        ];

        City::insert($cities);
    }
}
