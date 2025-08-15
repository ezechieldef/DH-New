<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FaqFactory extends Factory
{
    public function definition(): array
    {
        return [
            'question' => $this->faker->sentence().' ?',
            'reponse' => $this->faker->paragraph(),
            'ordre' => 1,
            'actif' => true
        ];
    }
}