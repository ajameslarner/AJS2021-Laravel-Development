<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->catchPhrase(),
            'short' => $this->faker->realText(200, 2),
            'body' => $this->faker->realText(2000, 2),
            'user_id' => User::factory(),
        ];
    }
}
