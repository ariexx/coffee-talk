<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class OrderItemFactory extends Factory
{
	protected $model = OrderItem::class;

	public function definition(): array
	{
		return [
			'name' => $this->faker->name(),
			'description' => $this->faker->text('50'),
			'quantity' => $this->faker->randomNumber(),
			'price' => $this->faker->randomNumber(),
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),

			'order_id' => Order::inRandomOrder()->first()->id,
			'product_id' => Product::inRandomOrder()->first()->id,
		];
	}
}
