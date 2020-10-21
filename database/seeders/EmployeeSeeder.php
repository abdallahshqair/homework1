<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
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
            DB::table('employees')->insert([

                'FirstName' => $faker->firstName,
                'LastName' => $faker->lastName,
                'office_code' =>$value,
                'reportsTo' =>$value,
                'Extension' => $faker->fileExtension,
                'Email' => $faker->email,
                'JobTitle' => $faker->jobTitle,
            ]);
        }



    }
}
