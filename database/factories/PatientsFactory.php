<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patients>
 */
class PatientsFactory extends Factory
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
           'cpf' => $faker->cpf(false),
           'rg' =>  $faker->rg(),
           'sus' => $faker->rg(false),
           'genre' => $this->faker->randomElement(['M', 'F']),
           'birthday' => $this->faker->dateTimeBetween('-100 years', 'now'),
           'phoneNumber' => $this->faker->tollFreePhoneNumber(),
           'email' => $this -> faker->safeEmail(),
           'street' => $this->faker->streetName(),
           'number' => $this->faker->buildingNumber(),
           'sector' => $this->faker->state(),
           'city' => $this->faker->city(),
           'province' => $this->faker->stateAbbr(),
           'zipcode' => $this->faker->postcode()
        ];
    }
}
