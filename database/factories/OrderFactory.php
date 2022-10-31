<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition(): array
    {
        return [
            'id' => $this->faker->randomNumber(),
            'user_id' => User::first()->id,
            'order_number' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'name' => $this->faker->name(),
            'table_number' => $this->faker->randomNumber(),
            'type' => 'dinein',
            'status' => 'pending',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
