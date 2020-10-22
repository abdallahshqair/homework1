<?php

namespace Database\Seeders;

use App\Models\Productline;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productline = Productline::factory()->count(3)->create();
        return $productline;





    }
        //

}
