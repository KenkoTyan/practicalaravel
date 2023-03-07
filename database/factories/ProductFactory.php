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
            "category_id"=>$this->faker->numberBetween(1,3),
            //'title' => $this->faker->words(5, true),
            "name"=>$this->faker->words(3, true),
            // "price"=>fake()->randomFloat(2), */
            // от 20 до 80, после запятой 2 знака
            "price"=>$this->faker->randomFloat(2,1000,5000),
            "prod_country"=>$this->faker->country(),
            "prod_year"=>$this->faker->year(),
            "prod_model"=>$this->faker->word(),
            "amount" => $this->faker->numberBetween(0,3),
            //"thumbnail"=>$this->faker->image("public/storage/products",150,100,null,false),
        ];
    }
}
