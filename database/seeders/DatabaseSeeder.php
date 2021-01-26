<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Random;
use App\Models\Breakdown;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(RandomSeeder::class);
        $this->call(BreakdownSeeder::class);
    }
}
