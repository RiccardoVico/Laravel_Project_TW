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
    { Schema::create ('foto', function(Blueprint $table){
        $table->bigIncrements('idfoto')->index();
        $table->text ('descrizione');
        $table->bigInteger('idutente')->unsigned()->nullable();
            $table->BigInteger('idannuncio')->unsigned();
            $table->foreign('idutente')->references('id')->on('users');
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
        Schema::dropIfExists('foto');//
    }
}