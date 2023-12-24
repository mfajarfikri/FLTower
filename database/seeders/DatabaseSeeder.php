<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bay;
use Illuminate\Database\Seeder;
use Database\Factories\BayFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UltgSeeder::class,
            GarduIndukSeeder::class,
            BaySeeder::class,
            // BayFactory::class
        ]);
    }
}
