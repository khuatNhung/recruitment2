<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cv_id');
            $table->dateTime('day_interview');
            $table->dateTime('deadline');
            $table->string('point_test',20);
            $table->text('conclude_end')->nullable();
            $table->boolean('result_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessment');
    }
}
