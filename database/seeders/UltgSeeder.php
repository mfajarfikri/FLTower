<?php

namespace Database\Seeders;

use App\Models\Ultg;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UltgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('ultgs')->delete();

        DB::table('ultgs')->insert(array(
            0 => array(
                'id' => 1,
                'name_ultg' => 'Karawang',
                'link' => '/karawang',
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            ),
            1 => array(
                'id' => 2,
                'name_ultg' => 'Purwakarta',
                'link' => '/purwakarta',
                'created_at' => '2023-12-23 14:00:00',
                'updated_at' => '2023-12-23 14:00:00'
            )
        ));
    }
}
