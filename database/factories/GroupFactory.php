<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'group_G' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'carrer_G' => $this->faker->randomElement([
                'Ingeniería',
                'Medicina',
                'Arquitectura',
                'Derecho',
                'Administración',
                'Contabilidad',
                'Psicología',
            ]),
        ];
    }
}
