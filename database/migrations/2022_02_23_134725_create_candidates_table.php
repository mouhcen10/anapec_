<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('cin')->unique();
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('situation_f');
            $table->date('date_nais');
            $table->string('adress');
            $table->string('province');
            $table->string('commune');
            $table->string('email')->unique();
            $table->string('gsm_1');
            $table->string('gsm_2')->nullable();
            $table->string('tel')->nullable();
            $table->string('situation_prof');
            $table->date('au_chomage')->nullable();
            $table->boolean('mobilite_locale')->default(false)->nullable();
            $table->boolean('mobilite_regionale')->default(false)->nullable();
            $table->boolean('mobilite_nationale')->default(false)->nullable();
            $table->boolean('mobilite_internationale')->default(false)->nullable();
            $table->boolean('handicap')->default(false);
            $table->string('nature_handicap')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
