<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attendances;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttendancesSymptoms>
 */
class AttendancesSymptomsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'attendance_id' => $this->faker->randomElement(Attendances::all()->pluck('id')->toArray()),
            'description' => \Faker\Provider\Lorem::sentence(20, true),
            'intensity' => $this->faker->randomElement(['leve','pesada','moderada']),
            'since' => $this->faker->randomElement(['1 mês','semana passada','5 dias']),
        ];
    }
}
