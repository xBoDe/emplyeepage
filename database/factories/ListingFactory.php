<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'name' => $this->faker->firstNameMale(),
            'FatherName' =>$this->faker->lastName(),
            'Address' =>$this->faker->email(),
            'Phone'=>$this->faker->phoneNumber(),
            'CNIC' =>$this->faker->numberBetween(1000000000,9999999999),

        ];
    }
}
