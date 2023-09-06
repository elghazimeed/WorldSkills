<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medecin>
 */
class MedecinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => $this->faker->unique()->numerify('M#####'), 
            'specialite' => $this->faker->word, 
            'service' => $this->faker->word, 
            'tarif' => $this->faker->randomFloat(2, 50, 500), 
        ];
    }
}
