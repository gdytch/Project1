<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Semester extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester', function (Blueprint $table) {
            $table->increments('id');
            $table->string('semester');
            $table->timestamps();

            $table->integer('year_id')->unsigned()->nullable();

        });
        Schema::table('semester', function (Blueprint $table) {
            $table->foreign('year_id')->references('id')->on('year')->onDelete('set null');

        });
        Schema::table('subjects', function (Blueprint $table) {
            $table->foreign('semester_id')->references('id')->on('semester')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semester');
    }
}
