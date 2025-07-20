<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GuardianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni_G' => $this->faker->randomNumber(8, true),
            'name_G' => $this->faker->name(),
            'last_name_G' => $this->faker->lastName(),
            'middle_name_G' => $this->faker->lastName(),
            'phone_G' => $this->faker->numerify('########'),
            'address_G' => $this->faker->streetAddress(),
        ];
    }
}
