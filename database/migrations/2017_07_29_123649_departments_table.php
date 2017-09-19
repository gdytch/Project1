<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_id')->unique();
            $table->string('department_name');
            $table->integer('year_levels');
            $table->integer('department_head')->unsigned()->nullable();
            $table->timestamps();
        });
        Schema::table('users', function ($table) {
            $table->foreign('department_id')->references('department_id')->on('departments')->onDelete('set null')->onUpdate('cascade');
        });
        Schema::table('departments', function ($table) {
            $table->foreign('department_head')->references('id')->on('teachers')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
