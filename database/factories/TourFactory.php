<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = now();
        $endDate = now()->addMonths(2);

        $startingDate = $this->faker->dateTimeBetween($startDate, $endDate);
        $endingDate = $this->faker->dateTimeBetween($startingDate, $endDate);

        return [
            'name' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(500, 3000),
            'cover' => $this->faker->image(('storage/app/public'),500,312, null, false),
            'starting_date' => $startingDate,
            'ending_date' => $endingDate,
            'destination_id' => rand(1, 3),
            'user_id' => 2,
        ];
    }
}
