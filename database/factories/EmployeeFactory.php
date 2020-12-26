<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'FirstName' =>$this->faker->firstName,
            'LastName' =>$this->faker->lastName,
            'office_code' =>random_int(1,100),
            'reportsTo' =>random_int(1,100),
            'Extension' =>$this->faker->fileExtension,
            'Email' =>$this->faker->email,
            'JobTitle' =>$this->faker->jobTitle,        ];
    }
}
