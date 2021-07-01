<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained();
            $table->string('func1');
            $table->integer('func1_start');
            $table->integer('func1_stop');
            $table->string('func2');
            $table->integer('func2_start');
            $table->integer('func2_stop');
            $table->string('func3');
            $table->integer('func3_start');
            $table->integer('func3_stop');
            $table->text('bs_code');
            $table->string('bs_code_description');
            $table->string('bs_code_ref');
            $table->string('bs_design');
            $table->string('bs_design_description');
            $table->string('bs_design_ref');
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
        Schema::dropIfExists('project_details');
    }
}
