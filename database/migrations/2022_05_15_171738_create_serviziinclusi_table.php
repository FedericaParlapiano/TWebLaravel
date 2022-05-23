<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiziinclusiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviziinclusi', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('servizi', ['bagni', 'cucina', 'sala studio', 'lavatrice', 'parcheggio', 'garage', 'giardino', 'locale ricreativo', 'forno', 'frigo', 'lavastoviglie', 'condizionatore']);
            $table->integer('annuncio');
            $table->integer('quantita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serviziinclusi');
    }
}
