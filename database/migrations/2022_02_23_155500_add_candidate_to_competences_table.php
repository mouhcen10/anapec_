<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCandidateToCompetencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('competences', function (Blueprint $table) {
            $table->foreignId('candidate_id')->after('id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('competences', function (Blueprint $table) {
            $table->dropForeign('competences_candidate_id_foreign');
        });
    }
}
