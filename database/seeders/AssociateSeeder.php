<?php

namespace Database\Seeders;

use App\Models\Associate as ModelsAssociate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Associate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsAssociate::factory(5)->create();
    }
}
