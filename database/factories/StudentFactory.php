<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dni_S' => $this->faker->randomNumber(8, true),
            'name_S' => $this->faker->name(),
            'last_name_S' => $this->faker->lastName(),
            'middle_name_S' => $this->faker->lastName(),
            'slug_name_S' => $this->faker->lastName(),
            'phone_S' => $this->faker->phoneNumber(),
            'address_S' => $this->faker->streetAddress(),
            'school_S' => $this->faker->word(),
            'guardian_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
