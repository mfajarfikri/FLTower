<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bays')->delete();

        DB::table('bays')->insert(array(
            0 => array(
                'id' => 1,
                'name_bay' => 'Kosambi#150',
                'gardu_id' => 1,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            1 => array(
                'id' => 2,
                'name_bay' => 'Dawuan#150',
                'gardu_id' => 1,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            2 => array(
                'id' => 3,
                'name_bay' => 'Sukamandi#150',
                'gardu_id' => 1,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            3 => array(
                'id' => 4,
                'name_bay' => 'Rengasdengklok#150',
                'gardu_id' => 1,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            4 => array(
                'id' => 5,
                'name_bay' => 'Kiarapayung#150',
                'gardu_id' => 1,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            5 => array(
                'id' => 6,
                'name_bay' => 'Maligi#150',
                'gardu_id' => 1,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            6 => array(
                'id' => 7,
                'name_bay' => 'Parungmulya#150',
                'gardu_id' => 1,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            7 => array(
                'id' => 8,
                'name_bay' => 'Telukjambe#150',
                'gardu_id' => 1,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            8 => array(
                'id' => 9,
                'name_bay' => 'Purwakarta#150',
                'gardu_id' => 2,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            9 => array(
                'id' => 10,
                'name_bay' => 'Subang#150',
                'gardu_id' => 2,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            10 => array(
                'id' => 11,
                'name_bay' => 'Indobharat#150',
                'gardu_id' => 2,
                'long' => 0,
                'lat' => 0,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
        ));
    }
}
