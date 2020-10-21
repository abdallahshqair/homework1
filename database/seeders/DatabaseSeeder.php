<?php

namespace Database\Seeders;

use App\Models\Office;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Officeseeder::class);
        $this->call(Userseeder::class);
        $this->call(ProductlineSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(OrderProductSeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CustomerSeeder::class);
        $this->call(OrderSeeder::class);


    }
}
