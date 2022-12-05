<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::table('ads', function (Blueprint $table) {
            $table->enum('type', ['banner', 'promo'])->after('active');
		});
	}

	public function down()
	{
		Schema::table('ads', function (Blueprint $table) {
            $table->dropColumn('type');
		});
	}
};
