<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competences', function (Blueprint $table) {
            $table->id();
            $table->string('langue_1')->nullable();
            $table->string('niveau_langue_1')->nullable();
            $table->string('langue_2')->nullable();
            $table->string('niveau_langue_2')->nullable();
            $table->string('langue_3')->nullable();
            $table->string('niveau_langue_3')->nullable();
            $table->string('bureautique')->nullable();
            $table->string('comp_specifiques')->nullable();
            $table->string('permis_conduire')->nullable();
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
        Schema::dropIfExists('competences');
    }
}
