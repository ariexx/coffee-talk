<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::create('order_items', function (Blueprint $table) {
			$table->unsignedBigInteger('id')->primary();
            $table->unsignedBigInteger('order_id')->index();
            $table->unsignedBigInteger('product_id')->index();
            $table->string('name', 100);
            $table->string('description', 100)->nullable();
            $table->integer('quantity');
            $table->unsignedBigInteger('price');
			$table->timestamps();
            $table->softDeletes();

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::dropIfExists('order_items');
	}
};
