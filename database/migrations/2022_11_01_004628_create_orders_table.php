<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::create('orders', function (Blueprint $table) {
			$table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('order_number', 20)->index();
            $table->string('email', 100)->nullable();
            $table->string('name', 100);
            $table->integer('table_number')->nullable();
            $table->enum('type', ['delivery', 'takeaway', 'dinein'])->default('dinein');
            $table->enum('status', ['pending', 'confirmed', 'delivered', 'cancelled'])->default('pending');
			$table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::dropIfExists('orders');
	}
};
