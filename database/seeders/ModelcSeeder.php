<?php

namespace Database\Seeders;

use App\Models\Cotxe;
use App\Models\Modelc;
use Illuminate\Database\Seeder;

class ModelcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelc::factory()->count(100)->create();
    }
}
