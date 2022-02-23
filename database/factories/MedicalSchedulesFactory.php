<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\HealthUnits;
use App\Models\Collaborators;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medical_schedules>
 */
class MedicalSchedulesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'health_unit_id' => $this->faker->randomElement(HealthUnits::all()->pluck('id')->toArray()),
            'collaborator_id' => $this->faker->randomElement(Collaborators::all()->pluck('id')->toArray()),
            'date' => $this->faker->dateTimeBetween('7 days', '30 days'),
        ];
    }
} 