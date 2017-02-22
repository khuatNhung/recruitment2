<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitment', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('position',400)->nullable();
            $table->text('address_work')->nullable();
            $table->text('requirement')->nullable();
            $table->text('benefit')->nullable();
            $table->date('deadline')->nullable();
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
        Schema::dropIfExists('recruitment');
    }
}
