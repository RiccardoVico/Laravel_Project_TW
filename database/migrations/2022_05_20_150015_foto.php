<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Foto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto',function(Blueprint $table)
        {
            $table->integer('idfoto')->index();
            $table->string('idutente',20);
            $table->integer('idannuncio');
            $table->text('descrizione');
            
            $table->foreign('idutente')->references('username')->on('utente');
            $table->foreign('idannuncio')->references('idannuncio')->on('annuncio');
        });
        //
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('foto');
    }
    
}

