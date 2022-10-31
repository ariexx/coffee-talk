<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
	public function run()
	{
        \App\Models\OrderItem::factory()->count(2)->create();
	}
}
