<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVincoliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vincoli', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('vincolo', ['animali', 'fumatori', 'feste', 'matricole']);
            $table->integer('annuncio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vincoli');
    }
}
