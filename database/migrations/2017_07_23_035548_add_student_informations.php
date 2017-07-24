<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentInformations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('ID_no');
            $table->string('middle_name');
            $table->string('last_name');
            $table->char('gender')->nullable();
            $table->integer('age')->nullable();
            $table->integer('year_level')->nullable();
            $table->string('department_id')->nullable();
            $table->string('major')->nullable();
            $table->longtext('address')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('contact_no')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_last_name')->nullable();
            $table->string('father_contact_no')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_last_name')->nullable();
            $table->string('mother_contact_no')->nullable();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('ID_no')->unique();
            $table->dropColumn('middle_name');
            $table->dropColumn('last_name');
            $table->dropColumn('gender');
            $table->dropColumn('age');
            $table->dropColumn('year_level');
            $table->dropColumn('department_id');
            $table->dropColumn('major');
            $table->dropColumn('address');
            $table->dropColumn('birthdate');
            $table->dropColumn('contact_no');
            $table->dropColumn('father_first_name');
            $table->dropColumn('father_last_name');
            $table->dropColumn('father_contact_no');
            $table->dropColumn('mother_first_name');
            $table->dropColumn('mother_last_name');
            $table->dropColumn('mother_contact_no');

        });
    }
}
