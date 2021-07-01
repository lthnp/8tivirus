<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->char('code', 4);
            $table->string('name');
            $table->string('name_th');
            $table->string('nickname');
            $table->string('description');
            $table->string('advisor');
            $table->string('img');
            $table->string('dev_img');
            $table->string('design_img');
            $table->string('showreel_url');
            $table->string('demo_url');
            $table->string('interview_url');
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
        Schema::dropIfExists('projects');
    }
}
