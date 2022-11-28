<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::table('products', function (Blueprint $table) {
            $table->boolean('is_discount')->default(false);
            $table->integer('discount')->default(0);
		});
	}

	public function down()
	{
		Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('is_discount');
            $table->dropColumn('discount');
		});
	}
};
