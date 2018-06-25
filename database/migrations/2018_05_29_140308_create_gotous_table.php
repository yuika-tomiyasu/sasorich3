<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGotouSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gotous', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quizid');
            $table->string('gotou');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gotous');
    }
}
