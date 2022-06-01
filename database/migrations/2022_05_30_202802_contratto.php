<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contratto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratto',function(Blueprint $table)
        {
            $table->integer('idcontratto')->index();
            $table->BigIncrements('idannuncio');
            $table->date('data');
            $table->string('username1',20);
            $table->string('username2',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratto');
    }
}