<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'path' => $this->faker->randomElement(['/1/3', '/2/4']),
            'title' => $this->faker->title(),
            'notes' => $this->faker->name(),
            'city_id' => rand(1, 31),
            'region_id' => rand(1, 53),
            'type' => $this->faker->randomElement(['owner', 'mediator+1', 'mediator+2', 'mediator+3']),
            'price' => rand(50000, 120000),
            'name' => $this->faker->name(),
            'number' => $this->faker->phoneNumber(),
            'user_id' => 1,
        ];
    }
}
