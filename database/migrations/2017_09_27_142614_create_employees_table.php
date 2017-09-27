<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('complete_name');
            $table->string('rg');
            $table->string('expedition_date_rg');
            $table->integer('uf_id')->unsigned();
            $table->string('org_rg');
            $table->string('father');
            $table->string('mother');
            $table->string('birth');
            $table->integer('birth_parents')->unsigned();
            $table->integer('birth_state')->unsigned();
            $table->string('birth_city');
            $table->integer('civil_state')->unsigned();
            $table->string('sex');
            $table->string('cpf_own');
            $table->string('cpf');
            $table->integer('schooling')->unsigned();
            $table->integer('color')->unsigned();
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
        Schema::dropIfExists('employees');
    }
}
