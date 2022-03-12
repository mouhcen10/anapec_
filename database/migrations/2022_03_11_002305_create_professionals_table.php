<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable(true)->constrained();
            $table->string('raison_sociale');
            $table->string('secteur');
            $table->string('cin')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('num_aff_cnss');
            $table->string('fonction');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('adress');
            $table->string('tel')->nullable();
            $table->string('gsm');
            $table->string('ville');
            $table->string('commune');
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
        Schema::dropIfExists('professionals');
    }
}
