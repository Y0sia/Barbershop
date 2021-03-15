<?php

namespace Database\Seeders;

use App\Models\Shedule;
use Illuminate\Database\Seeder;

class SheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shedule::factory()->count(10)->create();
    }
}
