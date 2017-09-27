<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeer_id')->unsigned();
            $table->foreign ('employeer_id')->references('id')->on('employees');
            $table->string ('number');
            $table->string ('series');
            $table->string ('letter');
            $table->integer('state_id')->unsigned();
            $table->string ('date_issue');
            $table->string ('date_vality');
            $table->string ('integration_program');
            $table->string ('pis_pasep');
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
        Schema::dropIfExists('ctps');
    }
}
