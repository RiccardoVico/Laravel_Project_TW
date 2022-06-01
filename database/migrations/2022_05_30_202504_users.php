
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('users',function(Blueprint$table){
        $table->bigIncrements('id');
        $table->string('username',20)->index();
        $table->string('nome',20);
        $table->string('cognome',20);
        $table->string('recapito',10)->nullable();
        $table->string('password',500);
        $table->string('cittainteresse',20)->nullable();
        $table->string('via',20)->nullable();
        $table->string('citta',20)->nullable();
        $table->integer('numerocivico')->nullable();
        $table->string('cap',5)->nullable();
        $table->string('provincia',2)->nullable();
        $table->string('paese',20)->nullable();
        $table->string('mail',500)->nullable();
        $table->string('role',10)->default('user');
        $table->rememberToken();
        $table->timestamps();
    });
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