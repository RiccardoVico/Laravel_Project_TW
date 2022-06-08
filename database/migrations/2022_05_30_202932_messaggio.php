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
            $table->bigIncrements('idmessaggio')->index();
            $table->bigInteger('idutente1')->unsigned();
            $table->bigInteger('idutente2')->unsigned();
            $table->text('testo');
            $table->datetime('data');
            $table->BigInteger('idannuncio')->unsigned();
            $table->foreign('idutente1')->references('id')->on('users');
            $table->foreign('idutente2')->references('id')->on('users');
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