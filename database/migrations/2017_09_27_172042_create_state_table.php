<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('name');
            $table->string ('initials');
            $table->timestamps();
        });

        Schema::table('hability', function($table) {
            $table->foreign ('state_id')->references('id')->on('state');
        });

        Schema::table('ctps', function($table) {
            $table->foreign ('state_id')->references('id')->on('state');
        });

        Schema::table('employees', function($table) {
            $table->foreign ('uf_id')->references('id')->on('state');
        });

        Schema::table('employees', function($table) {
            $table->foreign ('birth_state')->references('id')->on('state');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state');
    }
}
