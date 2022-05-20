<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Messaggio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messaggio',function(Blueprint $table)
        {
            $table->integer('idmessaggio')->index();
            $table->string('username1',20);
            $table->string('username2',20);
            $table->text('testo');
            $table->date('data');
            $table->integer('idannuncio');
            $table->foreign('username1')->references('username')->on('utente');
            $table->foreign('username2')->references('username')->on('utente');
            $table->foreign('idannuncio')->references('idannuncio')->on('annuncio');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messaggio');
    }
}

