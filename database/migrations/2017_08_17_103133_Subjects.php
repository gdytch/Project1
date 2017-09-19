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
            $table->string('course_id');
            $table->string('course_description');
            $table->string('classroom')->nullable();
            $table->integer('instructor')->nullable()->unsigned();
            $table->string('timeslot')->nullable();
            // $table->foreign('instructor')->references('id')->on('teachers');
            // $table->string('year_id')->nullable();
            $table->integer('semester_id')->nullable()->unsigned();
            $table->timestamps();
        });
        Schema::table('subjects', function (Blueprint $table){
            $table->foreign('instructor')->references('id')->on('teachers')->onDelete('set null');
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
