<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1, 10),
            'type' => fake()->randomElement(['visa', 'mastercard', 'amex']),
            'number' => fake()->creditCardNumber(null, true),
            'holder' => fake()->name(),
            'expiration_date' => fake()->creditCardExpirationDate(),
        ];
    }
}
