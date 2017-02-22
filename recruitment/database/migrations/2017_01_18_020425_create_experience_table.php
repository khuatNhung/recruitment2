<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cv_id');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('work_unit');
            $table->string('project_name',500)->nullable();
            $table->text('project_description')->nullable();
            $table->string('leader_teacher')->nullable();
            $table->string('position')->nullable();
            $table->text('task')->nullable();
            $table->string('size')->nullable();
            $table->text('technology')->nullable();
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
        Schema::dropIfExists('experience');
    }
}
