<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Collaborators::factory(20)->create();
        \App\Models\Patients::factory(100)->create();
        \App\Models\HealthUnits::factory(10)->create();
        \App\Models\Attendances::factory(30)->create();
        \App\Models\AttendancesDrugs::factory(10)->create();
        \App\Models\AttendancesSymptoms::factory(10)->create();
        \App\Models\MedicalSchedules::factory(10)->create();
    }
}
