<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRichiesteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('richieste', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locatore', 20);
            $table->string('locatario', 20);
            $table->string('annuncio');
            $table->decimal('canoneProposto', $precision = 6, $scale = 2)->nullable();
            $table->string('messaggio')->nullable();
            $table->enum('stato', ['accettato','rifiutato','da valutare']);
            $table->date('inizioAffitto');
            $table->date('fineAffitto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('richieste');
    }
}
