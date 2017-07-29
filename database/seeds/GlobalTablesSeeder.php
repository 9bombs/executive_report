<?php

use Illuminate\Database\Seeder;

class GlobalTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //DB::table('faculties')->truncate('faculties');

        DB::table('faculties')->insert(
            ['name' => 'คณะครุศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะนิติศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะนิเทศศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะพาณิชยศาสตร์และการบัญชี', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะรัฐศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );
        
        DB::table('faculties')->insert(
            ['name' => 'คณะเศรษฐศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะอักษรศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะวิทยาศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );
        
        DB::table('faculties')->insert(
            ['name' => 'คณะวิศวกรรมศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะสถาปัตยกรรมศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'สำนักวิชาทรัพยากรการเกษตร', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะจิตวิทยา', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะทันตแพทยศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะพยาบาลศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะแพทยศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะเภสัชศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะสหเวชศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะวิทยาศาสตร์การกีฬา', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );

        DB::table('faculties')->insert(
            ['name' => 'คณะสัตวแพทยศาสตร์', 'description' => '',
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),]
        );
    }
}
