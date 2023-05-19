<?php

namespace Database\Factories;

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nomor_induk' => $this->faker->unique()->numberBetween(10000, 99999),
            'username' => $this->faker->unique()->userName(),
            'password' => Hash::make('password'),
            'nama' => $this->faker->name,
            'kelas' => $this-> faker->randomElement(['X', 'XI', 'XII']),
            'golongan' => $this-> faker->randomElement(['A', 'B', 'C']),
        ];
    }
}
