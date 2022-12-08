<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	public function up()
	{
		Schema::create('news', function (Blueprint $table) {
			$table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('content');
            $table->string('image')->nullable();
			$table->timestamps();
            $table->softDeletes();
		});
	}

	public function down()
	{
		Schema::dropIfExists('news');
	}
};