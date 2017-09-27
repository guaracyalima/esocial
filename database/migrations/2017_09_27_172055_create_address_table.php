<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeer_id')->unsigned();
            $table->foreign ('employeer_id')->references('id')->on('employees');
            $table->string ('address');
            $table->string ('number');
            $table->string ('neighborhood');
            $table->integer('state_id')->unsigned();
            $table->foreign ('state_id')->references('id')->on('state');
            $table->string ('city');
            $table->string ('cep');
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
        Schema::dropIfExists('address');
    }
}
