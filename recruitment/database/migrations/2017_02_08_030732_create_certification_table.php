<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cv_id');
            $table->String('cer_name');
            $table->date('date_of_issue')->nullable();
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
        Schema::table('certification', function (Blueprint $table) {
            Schema::dropIfExists('certification');        
        });
    }
}
