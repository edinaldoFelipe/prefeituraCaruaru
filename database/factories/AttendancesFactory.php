<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Collaborators;
use App\Models\Patients;
use App\Models\HealthUnits;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendances>
 */
class AttendancesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'collaborator_id' => $this->faker->randomElement(Collaborators::all()->pluck('id')->toArray()),
            'patient_id' => $this->faker->randomElement(Patients::all()->pluck('id')->toArray()),
            'health_unit_id' => $this->faker->randomElement(HealthUnits::all()->pluck('id')->toArray()),
            'certificate' => $this->faker->boolean(50),
            'orientation' => \Faker\Provider\Lorem::sentence(20, true),
            'date_return' => $this -> faker -> dateTimeBetween('15 days', '30 days'),
        ];
    }
}
