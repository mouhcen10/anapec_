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
            $table->boolean('word')->default(false)->nullable();
            $table->boolean('excel')->default(false)->nullable();
            $table->boolean('access')->default(false)->nullable();
            $table->boolean('powerpoint')->default(false)->nullable();
            $table->string('comp_specifiques')->default(false)->nullable();
            $table->boolean('permis_conduire_a')->default(false)->nullable();
            $table->boolean('permis_conduire_b')->default(false)->nullable();
            $table->boolean('permis_conduire_c')->default(false)->nullable();
            $table->boolean('permis_conduire_d')->default(false)->nullable();
            $table->boolean('permis_conduire_eb')->default(false)->nullable();
            $table->boolean('permis_conduire_ec')->default(false)->nullable();
            $table->boolean('permis_conduire_ed')->default(false)->nullable();
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
