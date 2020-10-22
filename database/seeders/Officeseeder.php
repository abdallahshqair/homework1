<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Officeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


//            ]);
        $office = Office::factory()->count(3)->create();
        return $office;



    }
}
