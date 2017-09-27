<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCivilStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('civil_state', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('description');
            $table->timestamps();
        });

        Schema::table('employees', function($table) {
            $table->foreign ('civil_state')->references('id')->on('civil_state');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('civil_state');
    }
}
