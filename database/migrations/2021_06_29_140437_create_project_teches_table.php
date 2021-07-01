<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_teches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained();
            $table->tinyInteger('type')->comment('1 front, 2 back, 3 db');
            $table->string('tech');
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
        Schema::dropIfExists('project_teches');
    }
}
