<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Operation>
 */
class OperationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NuméroConsultation' => $this->faker->unique()->randomNumber(6),
            'patient_id' => Patient::factory(),
            'TypeConsultation' => 'Opération',
            'Objet' => $this->faker->sentence,
            'Observation' => $this->faker->paragraph,
            'Date' => $this->faker->date,
            'BlocOperatoire' => $this->faker->word,
            'DateDebut' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'DateFin' => $this->faker->dateTimeBetween('now', '+1 week'),
        ];
    }
}
