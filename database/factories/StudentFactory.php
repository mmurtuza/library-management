<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'approved' => $this->faker->boolean,
            'resjected' => $this->faker->boolean,
            'category' => $this->faker->numberBetween(1, 10),
            'roll_num' => $this->faker->numberBetween(111111, 999999),
            'branch' => $this->faker->numberBetween(1, 10),
            'year' => $this->faker->numberBetween(1, 4),
            'book_issued' => $this->faker->boolean,
            'email_id' => $this->faker->email,

        ];
    }
}
