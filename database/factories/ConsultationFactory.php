<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultation>
 */
class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NumeroConsultation' => $this->faker->unique()->randomNumber(6),
            'patient_id' => Patient::factory(),
            'TypeConsultation' => $this->faker->randomElement(['Consultation général', 'Opération']),
            'Objet' => $this->faker->sentence,
            'Observation' => $this->faker->paragraph,
            'Date' => $this->faker->date,
        ];
    }
}
