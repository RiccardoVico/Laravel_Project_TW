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
            $table->integer('idannuncio')->index();
            $table->string('nomeannuncio', 20);
            $table->integer('canoneaffitto')->index();
            $table->string('cap', 5);
            $table->string('numerocivico', 5);
            $table->string('citta', 20);
            $table->boolean('disponibilita', 1);
            $table->date('datacc')->nullable();
            $table->double('superficie');
            $table->boolean('postiletto');
            $table->boolean('wifi');
            $table->boolean('angolostudio');
            $table->boolean('climatizzatore');
            $table->integer('etamin');
            $table->integer('etamax');
            $table->boolean('tipologia');
            $table->text('descrizione');
            $table->text('utenze');
            $table->string('via', 20);
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
