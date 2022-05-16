<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('username',20);
            $table->string('password');
            $table->enum('categoria', ['locatario','locatore','admin']);
            $table->text('fotoProfilo')->nullable();
            $table->string('nome');
            $table->string('cognome');
            $table->string('sesso',1);
            $table->date('dataNascita')->nullable();
            $table->string('citta')->nullable();
            $table->string('numTelefono',15)->nullable();
            $table->string('email');
            $table->string('universita')->nullable();
            $table->string('facolta')->nullable();
            $table->year('annoImmatricolazione')->nullable();
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
        Schema::dropIfExists('users');
    }
}
