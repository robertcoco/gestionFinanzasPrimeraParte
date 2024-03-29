<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Finanzas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finanzas', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("year");
            $table->string("month");
            $table->date("cutDate");
            $table->integer("BalanceInicial");
            $table->integer("totalIngresos");
            $table->integer("totalEgresos");
            $table->integer("BalanceCorte");
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
        //
    }
}
