<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Annuncio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annuncio',function (Blueprint $table) {
            $table->BigIncrements('idannuncio')->index();
            $table->string('nomeannuncio', 20);
            $table->integer('canoneaffitto');
            $table->string('cap', 5)->nullable();
            $table->string('numerocivico', 5)->nullable();
            $table->string('citta', 20)->nullable();
            $table->boolean('disponibilita', 1)->nullable();
            $table->date('datacc')->nullable();
            $table->double('superficie')->nullable();
            $table->integer('postiletto')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('angolostudio')->nullable();
            $table->boolean('climatizzatore')->nullable();
            $table->integer('etamin')->nullable();
            $table->integer('etamax')->nullable();
            $table->boolean('tipologia')->nullable();
            $table->text('descrizione')->nullable();
            $table->text('utenze')->nullable();
            $table->string('via', 20)->nullable();
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::dropIfExists('annuncio');
    }
}
