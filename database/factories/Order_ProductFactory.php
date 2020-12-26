<?php

namespace Database\Factories;

use App\Models\Order_Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class Order_ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order_Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'OrderID' =>random_int(1,100),
            'ProductCode' => random_int(1,100),
            'Qty' => random_int(1,100),
            'PriceEach' => random_int(1,100),
        ];
    }
}
