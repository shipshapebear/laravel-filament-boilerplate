<?php

namespace Database\Factories;

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

    protected static $booking_types = [
        'pickup',
        'dropoff',
    ];

    public function definition(): array
    {
        return [
            'origin' => $this->faker->address(),
            'destination' => $this->faker->address(), 
            'booking_type' => $this->faker->randomElement(self::$booking_types),
            'description' => $this->faker->text(),
        ];
    }

    
}
