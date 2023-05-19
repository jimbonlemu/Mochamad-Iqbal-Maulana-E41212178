<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    protected $model = Admin::class;

    public function definition()
    {
    

        return [
            'username' => $this->faker->userName,
            'password' => bcrypt('password'),
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
        ];
    }
}
