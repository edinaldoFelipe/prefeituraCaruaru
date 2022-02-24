<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use App\Models\Attendances;

class AttendanceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_update_select_delete()
    {
        // $this->expectNotToPerformAssertions();

        DB::beginTransaction();
        
        // create Attendance
        $attendance = Attendances::create([
            'collaborator_id' => 5,
            'patient_id' => 2,
            'health_unit_id' => 2,
            'certificate' => true,
            'orientation' => 'Evitar pegar sol.\nFazer exercicio.',
            'date_return' => date('Y-m-d', strtotime(date('Y-m-d') . "+ 15 days")),
        ]);

        // Update attendance
        $attendance -> certificate = true;
        $attendance -> save();

        // Get attendance
        if(!$newAttendance = Attendances::find($attendance -> id))
            throw new \Exception('Attendance don\'t found');

        // Delete Attendance
        $newAttendance -> delete();

        DB::rollBack();

        $response->assertStatus(200);
    }

    public function test_access_routes()
    {
        $this->get(route('attendances.index'))
            ->assertStatus(200);
    }
}
