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
            $table->string('nomeannuncio', 30)->unique();
            $table->integer('canoneaffitto');
            $table->string('cap', 5)->nullable();
            $table->string('numerocivico', 5)->nullable();
            $table->string('citta', 20)->nullable();
            $table->boolean('disponibilita', 1)->default(1);
            $table->timestamp('datacc')->nullable();
            $table->double('superficie')->nullable();
            $table->integer('postiletto')->nullable();
            $table->boolean('wifi')->nullable();
            $table->boolean('angolostudio')->nullable()->default(-1);
            $table->boolean('climatizzatore')->nullable();
            $table->integer('etamin')->nullable();
            $table->integer('etamax')->nullable();
            $table->boolean('genere')->nullable();
            $table->boolean('lavatrice')->default(-1);
            $table->boolean('lavastov')->default(-1);
            $table->boolean('tipologia')->nullable();
            $table->text('descrizione')->nullable();
            $table->text('utenze')->nullable();
            $table->string('via', 30)->nullable();
            $table->integer('tipo_stanza')->nullable()->default(-1); //camerasingolaodoppia
            $table->integer('numeroletticamera')->nullable()->default(-1);
            $table->integer('numerototalicamere')->nullable();
            $table->boolean('cucina')->nullable()->default(-1);
            $table->boolean('localericrativo')->nullable()->default(-1);
            $table->boolean('parcheggio')->nullable()->default(-1);
            $table->boolean('balcone')->nullable()->default(-1);
            $table->rememberToken();
            $table->timestamps();
            $table->datetime('in_at');
            $table->datetime('out_at');
            
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