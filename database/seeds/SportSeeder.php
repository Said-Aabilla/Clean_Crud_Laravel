<?php

use App\Sport;
use Illuminate\Database\Seeder;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = [
            [
                'id'    => '1',
                'name' => 'Zumba',
            ],
            [
                'id'    => '2',
                'name' => 'Wakeboard',
            ],
            [
                'id'    => '3',
                'name' => 'VTT',
            ],
            [
                'id'    => '4',
                'name' => 'Yoga',
            ],
            [
                'id'    => '5',
                'name' => 'Wing chun',
            ],
            [
                'id'    => '6',
                'name' => 'Aerobic',
            ],
            [
                'id'    => '7',
                'name' => 'Accrobranche',
            ],
            [
                'id'    => '8',
                'name' => 'Hapkido',
            ],
            [
                'id'    => '9',
                'name' => 'Aikido',
            ],
            [
                'id'    => '10',
                'name' => 'Basketball',
            ],
            [
                'id'    => '11',
                'name' => 'Handball',
            ],
        ];

        Sport::insert($sports);    }
}
