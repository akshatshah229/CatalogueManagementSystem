<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursestudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coursestudents', function (Blueprint $table) {
            $table->string('course_id');
            $table->string('course_name');
            $table->string('student_id');
            $table->string('enrolled');
            $table->string('semester');
            $table->string('department');
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
        Schema::dropIfExists('coursestudents');
    }
}
