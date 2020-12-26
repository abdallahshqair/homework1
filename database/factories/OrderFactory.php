<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'CustomerID' =>random_int(1,100),
            'OrderDate' =>$this->faker->dateTime,
            'RequireDate' =>$this->faker->dateTime,
            'ShippedDate' =>$this->faker->dateTime,
            'Status' =>random_int(1,100),
            'Comments' =>$this->faker->word,
        ];
    }
}
