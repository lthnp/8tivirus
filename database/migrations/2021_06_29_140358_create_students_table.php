<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained();
            $table->char('student_id', 8);
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname');
            $table->string('firstname_th');
            $table->string('lastname_th');
            $table->string('nickname_th');
            $table->string('email');
            $table->string('fb');
            $table->string('portfolio');
            $table->string('img');
            $table->string('img_art');
            $table->string('art_url');
            $table->tinyInteger('role')->comment('1 dev, 2 design, 3 both');
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
        Schema::dropIfExists('students');
    }
}
