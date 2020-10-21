<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($value=1;$value<10;$value++) {
            DB::table('customers')->insert([
                'Name' => $faker->name,
                'salesRepEmployeeNum' =>$value,
                'LastName' => $faker->lastName,
                'FirstName' => $faker->firstName,
                'Phone' => $faker->phoneNumber,
                'Address1' => $faker->address,
                'Address2' => $faker->address,
                'City' => $faker->city,
                'State' => $faker->state,
                'Country' => $faker->country,
                'CredLimit' =>$value,
                'PostalCode' =>$value,


            ]);
        }


    }
}
