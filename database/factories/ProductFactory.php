<?php

namespace Database\Factories;

use App\Models\Category;
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
        $category = Category::all()->random();
        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([9.99,25.99,99.99]),
            'category_id' => $category->id,
        ];
    }
}
