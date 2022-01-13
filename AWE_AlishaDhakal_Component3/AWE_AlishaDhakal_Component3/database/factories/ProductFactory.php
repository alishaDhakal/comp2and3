<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title,
            'name' => $this->faker->name,
            'price' => rand(1,99),
            'length' => rand(1,9999),
            'product_type' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
