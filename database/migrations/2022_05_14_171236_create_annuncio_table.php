<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnuncioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annuncio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipologia');
            $table->string('locatore', 20);
            $table->text('descrizione');
            $table->string('zonaLocazione');
            $table->string('indirizzo');
            $table->decimal('canoneAffitto', $precision = 6, $scale = 2);
            $table->integer('superficie')->nullable();
            $table->date('inizioPeriodoDisponibilita');
            $table->date('finePeriodoDisponibilita');
            $table->boolean('disponibilita');
            $table->integer('numCamere')->nullable();
            $table->integer('postiLettoTotali')->nullable();
            $table->integer('postiNellaStanza')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annuncio');
    }
}
