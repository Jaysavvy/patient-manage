<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'full_name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone_number' => $this->faker->phoneNumber,
            'date_of_birth' => $this->faker->date('Y-m-d'),
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Other']),
            'occupation' => $this->faker->jobTitle,
            'address' => $this->faker->address,

            // JSON for emergency contact information
            'emergency_contact' => [
                'name' => $this->faker->name,
                'phone_number' => $this->faker->phoneNumber
            ],

            // JSON for medical information
            'medical_information' => [
                'primary_care_physician' => $this->faker->randomElement(['Dr. Pain', 'Dr. Trauma', 'Dr. Buff']),
                'insurance_provider' => $this->faker->company,
                'insurance_policy_number' => $this->faker->unique()->numerify('POL###-###-####'),
                'allergies' => $this->faker->words(3, true),
                'current_medication' => $this->faker->words(5, true),
                'family_medical_history' => $this->faker->sentences(3, true),
                'past_medical_history' => $this->faker->sentences(3, true)
            ],

            // JSON for identification
            'identification' => [
                'type' => $this->faker->randomElement(['Birth Certificate', 'Passport']),
                'number' => $this->faker->randomNumber(9, true),
                'scanned_copy' => $this->faker->url // Placeholder URL for scanned copy
            ],

            // JSON for consents
            'consents' => [
                'treatment_consent' => $this->faker->boolean(90),  // 90% chance of true
                'information_disclosure_consent' => $this->faker->boolean(70),  // 70% chance of true
                'privacy_policy_agreement' => $this->faker->boolean(100)  // Always true
            ],
        ];
    }
}
