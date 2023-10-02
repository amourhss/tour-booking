<?php

namespace Database\Factories;

use App\Models\Tour;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numberOfClients = $this->faker->numberBetween(1, 10);
        $tourPrice = Tour::find($this->faker->numberBetween(1, Tour::count()))->price;
        $totalPrice = $tourPrice * $numberOfClients;

        $tour = Tour::find($this->faker->numberBetween(1, Tour::count()));
        $startingDate = Carbon::parse($tour->starting_date);
        $endingDate = Carbon::parse($tour->ending_date);

        // Generate a random booking date between starting_date and ending_date
        $bookingDate = $this->faker->dateTimeBetween($startingDate, $endingDate);

        return [
            'booking_date' => $bookingDate,
            'status' => 'pending',
            'payment_status' => 'unpaid',
            'total_price' => $totalPrice,
            'number_of_clients' => $numberOfClients,
            'user_id' => User::factory(),
            'tour_id' => Tour::factory(),
            'created_at' => $bookingDate,
            'updated_at' => $bookingDate,
        ];

    }
}
