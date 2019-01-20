<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDitributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ditributions', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('state');
            $table->string('destination');
            $table->timestamps();
            $table->integer('bus_id');
            $table->foreign('bus_id')->references('id')-> on('buses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ditributions');
    }
}
