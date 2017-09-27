<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaturalnessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturalness', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeer_id')->unsigned();
            $table->foreign ('employeer_id')->references('id')->on('employees');
            $table->string ('naturalized');
            $table->string ('naturalized_date');
            $table->string ('rne');
            $table->string ('expedition_date_rne');
            $table->string ('emmiter_org_rne');
            $table->string ('brazilian_married');
            $table->string ('brazilian_son');
            $table->string ('condition_classification');
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
        Schema::dropIfExists('naturalness');
    }
}
