<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' =>$this->faker->name,
            'salesRepEmployeeNum' =>random_int(1,100),
            'LastName' =>$this->faker->lastName,
            'FirstName' =>$this->faker->firstName,
            'Phone' =>$this->faker->phoneNumber,
            'Address1' =>$this->faker->address,
            'Address2' => $this->faker->address,
            'City' => $this->faker->city,
            'State' => $this->faker->state,
            'Country' =>$this->faker->country,
            'CredLimit' =>random_int(1,100),
            'PostalCode' =>random_int(1,100),
        ];
    }
}
