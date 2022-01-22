<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->id();
            $table->string('year_week_no');
            $table->string('state');
            $table->string('business_name');
            $table->string('merchant_id');
            $table->string('cash');
            $table->string('teller');
            $table->string('total_deposit');
            $table->string('odd1')->nullable();
            $table->string('odd2')->nullable();
            $table->string('odd3')->nullable();
            $table->string('odd4')->nullable();
            $table->string('odd5')->nullable();
            $table->string('odd6')->nullable();
            $table->string('g_odd1')->nullable();
            $table->string('g_odd1_1')->nullable();
            $table->string('g_odd1_2')->nullable();
            $table->string('g_odd1_3')->nullable();
            $table->string('g_odd2')->nullable();
            $table->string('g_odd2_1')->nullable();
            $table->string('g_odd2_2')->nullable();
            $table->string('g_odd2_3')->nullable();
            $table->string('g_odd3')->nullable();
            $table->string('g_odd3_1')->nullable();
            $table->string('g_odd3_2')->nullable();
            $table->string('g_odd3_3')->nullable();
            $table->string('g_odd4')->nullable();
            $table->string('g_odd4_1')->nullable();
            $table->string('g_odd4_2')->nullable();
            $table->string('g_odd4_3')->nullable();
            $table->string('g_odd5')->nullable();
            $table->string('g_odd5_1')->nullable();
            $table->string('g_odd5_2')->nullable();
            $table->string('g_odd5_3')->nullable();
            $table->string('g_odd6')->nullable();
            $table->string('g_odd6_1')->nullable();
            $table->string('g_odd6_2')->nullable();
            $table->string('g_odd6_3')->nullable();
            $table->string('total')->nullable();
            $table->string('total_1')->nullable();
            $table->string('total_2')->nullable();
            $table->string('total_3')->nullable();
            $table->string('loan')->nullable();
            $table->string('balance_merchant')->nullable();
            $table->string('balance_company')->nullable();
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
        Schema::dropIfExists('receipts');
    }
}
