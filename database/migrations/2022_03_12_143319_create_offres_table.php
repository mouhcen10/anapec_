<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('professional_id')->nullable(true)->constrained();
            $table->string('ref')->unique();
            $table->string('type');
            $table->string('poste');
            $table->date('date');
            $table->string('etat');
            $table->string('contrat');
            $table->longText('description');
            $table->integer('nbr_postes');
            $table->string('lieu_travail');
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
        Schema::dropIfExists('offres');
    }
}
