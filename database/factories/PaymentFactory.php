<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
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
            'card_id' => fake()->numberBetween(1, 10),
            'shop_id' => fake()->numberBetween(1, 10),
            'type' => fake()->randomElement(['credit', 'debit']),
            'method' => fake()->randomElement(['pos', 'atm', 'online']),
            'amount' => fake()->randomFloat(2, 1, 1000),
            'tax' => fake()->randomFloat(2, 1, 10),
        ];
    }
    
    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (Payment $payment) {
            $payment->shop_id = $payment->method === 'atm' ? null : $payment->shop_id;
        });
    }
}
