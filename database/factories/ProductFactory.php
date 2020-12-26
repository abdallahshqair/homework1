<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ProductLineID' =>random_int(1,100),
            'Name' =>$this->faker->name,
            'Scale' =>random_int(1,100),
            'vendor' =>$this->faker->word,
            'PdtDescription' =>$this->faker->word,
            'BuyPrice' =>random_int(1,100),
            'QtyLnStock' =>random_int(1,100),
            'MSRP' =>random_int(1,100),
        ];
    }
}
