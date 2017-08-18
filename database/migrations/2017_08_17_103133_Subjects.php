<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('COURSE_ID');
            $table->string('COURSE_DESCRIPTION');
            $table->string('CLASSROOM')->nullable();
            $table->string('INSTRUCTOR')->nullable();
            $table->string('timeslot')->nullable();
            $table->foreign('INSTRUCTOR')->references('id')->on('teachers');
            $table->string('SY_id')->nullable();
            $table->string('SEM_id')->nullable();
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
        Schema::dropIfExists('subjects');
    }
}
