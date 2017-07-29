<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlobalTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculties', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('student_department', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->index();
            $table->integer('cooperate_id');
            $table->integer('scholarship_id');
            $table->integer('development_id');
            $table->integer('is_residence');
            $table->integer('wellness_id');
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
        Schema::dropIfExists('faculties');
        Schema::dropIfExists('student_department');
    }
}
