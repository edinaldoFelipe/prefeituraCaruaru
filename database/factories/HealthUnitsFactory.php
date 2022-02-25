<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HealthUnits>
 */
class HealthUnitsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Posto', 'Hospital', 'UPA', 'UBS'])
                . ' ' . $this->faker->state(),
            'phoneNumber' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->safeEmail(),
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'sector' => $this->faker->state(),
            'city' => $this->faker->city(),
            'province' => $this->faker->stateAbbr(),
            'zipcode' => $this->faker->postcode()
        ];
    }
}
