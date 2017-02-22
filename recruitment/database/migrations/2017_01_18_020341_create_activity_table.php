<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('activity', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('cv_id');
			$table->date('start_date')->nullable();
			$table->date('end_date')->nullable();
			$table->string('activity_name', 500);
			$table->string('position')->nullable();
			$table->text('description')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('activity');
	}
}
