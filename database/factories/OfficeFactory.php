<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'City' =>$this->faker->city,
            'Phone' =>$this->faker->phoneNumber,
            'Address1' => $this->faker->address,
            'Address2' =>$this->faker->address,
            'State' =>$this->faker->state,
            'Country' =>$this->faker->country,
            'PostalCode' =>random_int(1,100),
            'Territory' =>random_int(1,100),
            //
        ];
    }
}
