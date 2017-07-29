<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Wellness\Patient::class, function (Faker\Generator $faker) {

    return [
        'personal_id'=> $faker->numberBetween($min = 1000000000, $max = 9999999999), 
        'cn' => $faker->numerify('HN######'), 
        'type' => $faker->randomElement($array = array ('นิสิตภาคปกติ','นิสิตอินเตอร์','อาจารย์','บุคลากร')), 
        'name' => $faker->name, 
        'email' => $faker->safeEmail,
        'gender' => $faker->randomElement($array = array ('ชาย','หญิง','ไม่ระบุ')),
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'address' => $faker->address, 
        'mobile' => $faker->phoneNumber, 

        'telephone' => $faker->phoneNumber,
        'nickname' => $faker->name, 
        'student_level' => $faker->randomElement($array = array ('ปริญญาตรี','ปริญญาโท','ปริญญาเอก')),
        'studied_year' => $faker->numberBetween($min = 1, $max = 8),
        'faculty_id' => $faker->numberBetween($min = 1, $max = 20),
        'field' => $faker->realText($maxNbChars = 50, $indexSize = 2),

        'doctor_name' => $faker->name, 
        'doctor_phone' => $faker->phoneNumber,
        'doctor_hospital' => $faker->name,
        'allergic' => $faker->realText($maxNbChars = 200, $indexSize = 2), 
        'advisor_id' => $faker->numberBetween($min = 1, $max = 10),
        'emergency_1_name' => $faker->name, 
        'emergency_1_raletionship' => $faker->word,
        'emergency_1_phone' => $faker->phoneNumber,
        'emergency_2_name' => $faker->name, 
        'emergency_2_raletionship' => $faker->word,
        'emergency_2_phone' => $faker->phoneNumber,

        'workplace' => $faker->realText($maxNbChars = 75, $indexSize = 2),
        'position' => $faker->realText($maxNbChars = 25, $indexSize = 2),

        'created_at' => $faker->dateTimeThisDecade($max = 'now'),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Wellness\History::class, function (Faker\Generator $faker) {

    return [
        'living_place' => $faker->randomElement($array = array ('หอพักมหาวิทยาลัย','หอพักเอกชน','บ้าน/คอนโด')), 
        'living_with' => $faker->randomElement($array = array ('คนเดียว','รูมเมท','ครอบครัว')),
        'meet_with' => $faker->numberBetween($min = 1, $max = 10),
        'patient_id' => $faker->numberBetween($min = 1, $max = 3),
        'symptom_id' => $faker->numberBetween($min = 1, $max = 15),
        'note' => $faker->realText($maxNbChars = 200, $indexSize = 2), 
        'created_at' => $faker->dateTimeThisDecade($max = 'now'),
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Wellness\Advisor::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name, 
        'phone' => $faker->phoneNumber,
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Wellness\Symptom::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name, 
        'is_severe' => $faker->boolean($chanceOfGettingTrue = 10),
        'note' => $faker->realText($maxNbChars = 200, $indexSize = 2),
    ];
});