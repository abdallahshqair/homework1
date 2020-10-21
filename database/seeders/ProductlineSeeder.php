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

        $faker = Faker::create();

        for ($value = 0; $value < 10; $value++) {
            DB::table('productlines')->insert([

                'DescInText' => $faker->word,
                'DescInHTML' => $faker->word,
                'Image' => $faker->word,
            ]);
        }


    }
        //

}
