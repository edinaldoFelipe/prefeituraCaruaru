<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collaborators>
 */
class CollaboratorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('pt_BR');
        return [
            'name' => $this->faker->name(),
            'enroll' => $this->faker->randomNumber(),
            'cpf' => $faker->cpf(false),
            'phoneNumber' => $this->faker->tollFreePhoneNumber(),
            'email' => $this->faker->safeEmail()
        ];
    }
}
