<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            //'category_id' => fake()->name(),
            'category_id' => fake()->randomDigitNot(5,6,7,8,9),
            'name' => fake()->name(),
            'price' => fake()->name(),
            'year' => fake()->name(),
            'model' => fake()->name(),
            'country' => fake()->name(),
            'amount' => fake()->name(),
        ];
    }
}
