<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained();
            $table->string('name');
            $table->string('job');
            $table->tinyInteger('age');
            $table->string('background');
            $table->string('identity1');
            $table->tinyInteger('identity1_score');
            $table->string('identity2');
            $table->tinyInteger('identity2_score');
            $table->string('identity3');
            $table->tinyInteger('identity3_score');
            $table->string('identity4');
            $table->tinyInteger('identity4_score');
            $table->string('img');
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
        Schema::dropIfExists('personas');
    }
}
