<?php

namespace Database\Factories;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalInformation>
 */

class MedicalInformationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'patient_id' => Patient::factory(),
            'primary_care_physician' => $this->fake()->name(['Dr. Pain', ' Dr. Truma', 'Dr. Buff']),
            'insurance_provider' => $this->fake()->company,
            'insurance_policy_number' => $this->fake()->unique()->numerify('POL###-###-####'),
            'allergies' => $this->fake()->words(3, true),
            'current_medication' => $this->fake()->words(5, true),
            'family_medical_history' => $this->fake()->sentences(3, true),
            'past_medical_history' => $this->fake()->sentences(3, true),
        ];
    }
}
