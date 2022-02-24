<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCandidateToActivitesExtraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('activites_extra', function (Blueprint $table) {
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
        Schema::table('activites_extra', function (Blueprint $table) {
            $table->dropForeign('activites_extra_candidate_id_foreign');
        });
    }
}
