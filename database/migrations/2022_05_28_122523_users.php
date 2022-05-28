<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::create ('utente',function(Blueprint$table){
        $table->string('username',20)->index();
        $table->string('nome',20);
        $table->string('cognome',20);
        $table->string('recapito',10)->nullable();
        $table->string('password',20);
        $table->string('cittainteresse',20)->nullable();
        $table->string('via',20)->nullable();
        $table->string('citta',20)->nullable();
        $table->integer('numerocivico')->nullable();
        $table->string('cap',5)->nullable();
        $table->string('provincia',2)->nullable();
        $table->string('paese',20)->nullable();
        $table->string('mail',20)->nullable();
        $table->string('role',10)->default('user');
        $table->rememberToken();
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
