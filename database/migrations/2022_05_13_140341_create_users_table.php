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
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('cognome');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username',20);
            $table->string('password');
            $table->enum('role',['locatore', 'locatario','admin']);
            $table->string('fotoProfilo')->nullable();
            $table->enum('sesso', ['F', 'M']);
            $table->date('dataNascita')->nullable();
            $table->string('citta')->nullable();
            $table->string('numTelefono',15)->nullable();
            $table->string('universita')->nullable();
            $table->string('facolta')->nullable();
            $table->string('annoImmatricolazione')->nullable();
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
        Schema::dropIfExists('users');
    }
}
