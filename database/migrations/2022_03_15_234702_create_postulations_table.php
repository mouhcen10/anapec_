<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('offre_id')->nullable(true)->constrained();
            $table->foreignId('candidate_id')->nullable(true)->constrained();
            $table->text('motivations');
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
        Schema::dropIfExists('postulations');
    }
}
