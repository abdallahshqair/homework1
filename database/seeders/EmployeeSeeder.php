<?php

namespace Database\Seeders;

use App\Models\Employee;
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
        $employee = Employee::factory()->count(3)->create();
        return $employee;



    }
}
