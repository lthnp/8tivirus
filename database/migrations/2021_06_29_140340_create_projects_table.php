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
            $table->string('logo');
            $table->string('img');
            $table->string('dev_img');
            $table->string('design_img');
            $table->string('portrait_vdo_url');
            $table->string('showreel_url')->nullable();
            $table->string('demo_url');
            $table->tinyInteger('category');
            $table->tinyInteger('type')->comment('1 dev, 2 design, 3 both');
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
