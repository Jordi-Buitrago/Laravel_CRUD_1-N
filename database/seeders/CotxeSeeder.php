<?php

namespace Database\Seeders;

use App\Models\Cotxe;
use Database\Factories\ModelcFactory;
use Illuminate\Database\Seeder;
use App\Models\Modelc;

class CotxeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cotxe::factory()->count(5)->create();
    }
}
