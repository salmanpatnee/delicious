<?php

namespace Database\Factories;

use App\Models\Recipe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class RecipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Recipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'category_id' => $this->faker->numberBetween(2, 5),
            // 'difficulty_id' => $this->faker->numberBetween(1, 3),
            'title' => $this->faker->sentence,
            'slug' => Str::slug($this->faker->sentence),
            'body' => $this->faker->paragraph(6),
            'ingredients' => '4 Tbsp (57 gr) butter,2 large eggs,2 yogurt containers granulated sugar,1 vanilla or plain yogurt, 170g container,2 yogurt containers unbleached white flour,1.5 yogurt containers milk',
            'prep_time' => $this->faker->numberBetween(5, 30),
            'cook_time' => $this->faker->numberBetween(10, 60),
            'serves' => $this->faker->numberBetween(1, 5)
        ];
    }
}
