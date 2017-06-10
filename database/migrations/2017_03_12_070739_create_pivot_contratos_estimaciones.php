<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePivotContratosEstimaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_contratos_estimaciones', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('contratos_id')->unsigned();
            $table->integer('estimaciones_id')->unsigned();

            $table->foreign('contratos_id')->references('id')->on('contratos');
            $table->foreign('estimaciones_id')->references('id')->on('estimaciones');

            
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
        Schema::drop('pivot_contratos_estimaciones');
    }
}
