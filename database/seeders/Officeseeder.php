<?php

namespace Database\Seeders;

use App\Models\Office;
use Faker\Factory as Faker;
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
        $faker=Faker::create();

        for($value=0;$value<10;$value++) {
            DB::table('offices')->insert([

                'City' => $faker->city,
                'Phone' => $faker->phoneNumber,
                'Address1' => $faker->address,
                'Address2' => $faker->address,
                'State' => $faker->state,
                'Country' => $faker->country,
                'PostalCode' =>$value,
                'Territory' => $faker->word,


            ]);
        }



    }
}
