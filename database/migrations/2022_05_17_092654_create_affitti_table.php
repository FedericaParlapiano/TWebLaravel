<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffittiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('affitti', function (Blueprint $table) {
            $table->string('locatario', 20);
            $table->string('annuncio');
            $table->date('dataStipulaContratto');
            $table->date('dataFineContratto');
            $table->decimal('canoneConcordato', $precision = 6, $scale = 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('affitti');
    }
}
