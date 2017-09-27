<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hability', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employeer_id')->unsigned();
            $table->foreign ('employeer_id')->references('id')->on('employees');
            $table->string ('category_of_hability');
            $table->string ('date_issue');
            $table->string ('expedition_org');
            $table->integer('state_id')->unsigned();
            $table->string ('expire_date');
            $table->string ('firisty_hability_date');
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
        Schema::dropIfExists('hability');
    }
}
