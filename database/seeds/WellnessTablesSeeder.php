<?php

use Illuminate\Database\Seeder;
use App\Wellness\Patient;
use App\Wellness\History;
use App\Wellness\Advisor;
use App\Wellness\Symptom;

class WellnessTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $advisors = factory(Advisor::class,10)->create();
        $symptom = factory(Symptom::class,15)->create();
        $patients= factory(Patient::class, 3)->create();
        $history= factory(History::class, 35)->create();
    }
}
