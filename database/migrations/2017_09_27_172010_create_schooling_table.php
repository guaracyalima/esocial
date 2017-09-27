<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schooling', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('description');
            $table->timestamps();
        });

        Schema::table('employees', function($table) {
            $table->foreign ('schooling')->references('id')->on('schooling');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schooling');
    }
}
