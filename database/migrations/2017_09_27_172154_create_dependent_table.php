<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependent', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeer_id')->unsigned();
            $table->foreign ('employeer_id')->references('id')->on('employees');
            $table->string ('name');
            $table->string ('birth');
            $table->string ('cpf');
            $table->string ('kinship');
            $table->string ('sexo');
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
        Schema::dropIfExists('dependent');
    }
}
