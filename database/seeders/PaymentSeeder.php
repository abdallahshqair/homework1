<?php

namespace Database\Seeders;

use App\Models\Payment;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment = Payment::factory()->count(3)->create();
        return $payment;


    }
}
