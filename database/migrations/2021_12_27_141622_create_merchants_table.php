<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->id();
            $table->string('state');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('business_name');
            $table->string('agent_id')->unique();
            $table->unsignedBigInteger('odd1')->nullable();
            $table->foreign('odd1')->references('id')->on('odds');
            $table->unsignedBigInteger('odd2')->nullable();
            $table->foreign('odd2')->references('id')->on('odds');
            $table->unsignedBigInteger('odd3')->nullable();
            $table->foreign('odd3')->references('id')->on('odds');
            $table->unsignedBigInteger('odd4')->nullable();
            $table->foreign('odd4')->references('id')->on('odds');
            $table->unsignedBigInteger('odd5')->nullable();
            $table->foreign('odd5')->references('id')->on('odds');
            $table->unsignedBigInteger('odd6')->nullable();
            $table->foreign('odd6')->references('id')->on('odds');
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
        Schema::dropIfExists('merchants');
    }
}
