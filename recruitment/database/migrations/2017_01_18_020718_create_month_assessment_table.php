<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthAssessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('month_assessment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('work_id');
            $table->integer('user_id');
            $table->text('content');
            $table->float('point_job',8,2);
            $table->float('point_discipline',8,2);
            $table->float('point_event',8,2);
            $table->float('total',8,2);
            $table->text('conclude')->nullable();
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
        Schema::dropIfExists('month_assessment');
    }
}
