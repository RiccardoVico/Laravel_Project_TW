<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Faq extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create ('faq', function(Blueprint $table){
        $table->bigIncrements('idfaq')->index();
        $table->text ('domanda');
        $table->text('risposta');
        $table->string('categoria');
        $table->rememberToken();
        $table->timestamps();
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
        Schema::dropIfExists('faq');//
    }
}