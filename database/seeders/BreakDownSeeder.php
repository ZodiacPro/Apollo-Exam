<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Breakdown;

class BreakDownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Breakdown::factory()->count(50)->create();
    }
}
