<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterviewAssessmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview_assessment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('assess_id');
            $table->integer('user_id');
            $table->text('content');
            $table->boolean('result');
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
        Schema::dropIfExists('interview_assessment');
    }
}
