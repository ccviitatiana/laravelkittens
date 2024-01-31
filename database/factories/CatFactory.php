<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cat>
 */
class CatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cat_id' => 1,
            'breed' => $this->faker->sentence(),
            'name_cat' => $name_cat = $this->faker->name(),
            'slug'  => Str::slug($name_cat),
            'body'  => $this->faker->text(100)
        ];
    }
}
