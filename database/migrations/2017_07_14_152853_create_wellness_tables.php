<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWellnessTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wn_patients', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->string('cn');
            $table->string('type');
            $table->string('personal_id')->index(); //เลขปชช หรือ รหัสนิสิต
            $table->string('name',255);
            $table->string('gender');
            $table->string('email',100);
            $table->date('birthdate');
            $table->string('address');
            $table->string('mobile');
            $table->string('telephone')->nullable();

            //ข้อมูลนิสิต
            $table->string('nickname',25)->nullable();
            $table->string('student_level');
            $table->integer('studied_year')->nullable();
            $table->integer('faculty_id')->nullable()->unsigned();
            $table->string('field')->nullable();

            //ข้อมูลติดต่อฉุกเฉิน1
            $table->string('emergency_1_name');
            $table->string('emergency_1_raletionship');
            $table->string('emergency_1_phone');

            //ข้อมูลติดต่อฉุกเฉิน2
            $table->string('emergency_2_name')->nullable();
            $table->string('emergency_2_raletionship')->nullable();
            $table->string('emergency_2_phone')->nullable();

            //ข้อมูลอาจารย์-บุคลากร
            $table->string('workplace')->nullable();
            $table->string('position')->nullable();

            //ข้อมูลการรักษาก่อนหน้า
            $table->string('doctor_name');
            $table->string('doctor_phone');
            $table->string('doctor_hospital');
            $table->string('allergic')->nullable();

            //ผู้ให้คำปรึกษาที่ศุนย์สุขภาวะ
            $table->integer('advisor_id')->unsigned();

            $table->softDeletes();
            $table->timestamps();

            $table->unique(
                'CN', 'personal_id'
            );

        });

        Schema::create('wn_advisors', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->string('name');
            $table->string('phone');
            $table->timestamps();
        });

        Schema::create('wn_patient_histories', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->enum('living_place',['หอพักมหาวิทยาลัย','หอพักเอกชน','บ้าน/คอนโด']);
            $table->enum('living_with',['คนเดียว','รูมเมท','ครอบครัว']);
            $table->integer('meet_with')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('symptom_id')->unsigned();
            $table->longText('note');
            $table->timestamps();
        });


        Schema::create('wn_symptom', function (Blueprint $table) {
            $table->increments('id')->unsigned()->index();
            $table->string('name');
            $table->boolean('is_severe');
            $table->string('note');
        });


        Schema::table('wn_patients', function (Blueprint $table) {
            $table->foreign('advisor_id')->references('id')->on('wn_advisors');
            $table->foreign('faculty_id')->nullable()->references('id')->on('faculties')->onUpdate('cascade');

        });

        Schema::table('wn_patient_histories', function (Blueprint $table) {
            $table->foreign('meet_with')->references('id')->on('wn_advisors');
            $table->foreign('patient_id')->references('id')->on('wn_patients')->onDelete('cascade');
            $table->foreign('symptom_id')->references('id')->on('wn_symptom');
        });

    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('wn_patients');
        Schema::dropIfExists('wn_advisors');
        Schema::dropIfExists('wn_patient_histories');
        Schema::dropIfExists('wn_symptom');
    }
}
