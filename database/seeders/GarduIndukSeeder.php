<?php

namespace Database\Seeders;

use App\Models\Gardu_induk;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GarduIndukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gardu_induks')->delete();

        DB::table('gardu_induks')->insert(array(
            0 => array(
                'id' => 1,
                'name_gardu' => 'Kosambi Baru',
                'ultg_id' => 1,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            1 => array(
                'id' => 2,
                'name_gardu' => 'Dawuan',
                'ultg_id' => 1,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            2 => array(
                'id' => 3,
                'name_gardu' => 'Purwakarta',
                'ultg_id' => 2,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            3 => array(
                'id' => 4,
                'name_gardu' => 'Subang',
                'ultg_id' => 2,
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
        ));
    }
}
