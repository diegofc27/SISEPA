<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstimacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimaciones', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->text('nombre');
            $table->enum('estatus', ['pagado', 'no pagado']);    
            $table->date('fecha');
            $table->double('avance_fisico_estimado', 15, 8); 
            $table->double('neto_pagar', 15, 8);
            $table->text('texto');
            
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
        Schema::drop('estimaciones');
    }
}
