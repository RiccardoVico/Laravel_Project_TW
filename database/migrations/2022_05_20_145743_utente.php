<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('utente',function(Blueprint$table){
        $table->string('username',20)->index();
        $table->string('nome',20);
        $table->string('cognome',20);
        $table->string('recapito',10);
        $table->char('tipologia');
        $table->string('password',20);
        $table->string('cittainteresse',20);
        $table->string('via',20);
        $table->string('citta',20);
        $table->integer('numerocivico');
        $table->string('cap',5);
        $table->string('provincia',2);
        $table->string('paese',20);
        $table->string('mail',20);
        
    });
    
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('utente');   }
}
