
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Operazione extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operazione',function(Blueprint $table)
        {
            $table->bigIncrements('idoperazione')->index();
            $table->datetime('data');
            $table->string('descrizione',20);
            $table->string('username');
            $table->BigInteger('idannuncio')->unsigned();
            $table->foreign('username')->references('username')->on('users');
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
        Schema::dropIfExists('operazione');
    }
}