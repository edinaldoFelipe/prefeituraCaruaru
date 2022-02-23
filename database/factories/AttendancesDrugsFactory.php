<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attendances;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attendances_drugs>
 */
class AttendancesDrugsFactory extends Factory
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
            'name' => $this->faker->name(),
            'dosage' => $this->faker->numberBetween(1, 20) . ' ' . $this->faker->randomElement(['ml' ,'mg', 'uni']),
            'orientation' =>  $this->faker->randomElement(['Oral', 'Parental', 'Subcutânea', 'Nasal', 'Retal', 'Intra-vesical', 'Nebulização', 'Ocular', 'Sublingual']),
            'applied' => $this->faker->boolean(50)
        ];
    }
}
 