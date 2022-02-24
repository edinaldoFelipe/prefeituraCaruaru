<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendances_symptomsRequest;
use App\Http\Requests\UpdateAttendances_symptomsRequest;
use App\Models\AttendancesSymptoms;

class AttendancesSymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($attendance_id)
    {
        return AttendancesSymptoms::where('attendance_id', $attendance_id)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendances_symptomsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendances_symptomsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendancesSymptoms  $attendancesSymptoms
     * @return \Illuminate\Http\Response
     */
    public function show(AttendancesSymptoms $attendancesSymptoms, $attendance_id, $id)
    {
        return AttendancesSymptoms::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendancesSymptoms  $attendancesSymptoms
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendancesSymptoms $attendancesSymptoms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendances_symptomsRequest  $request
     * @param  \App\Models\AttendancesSymptoms  $attendancesSymptoms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendances_symptomsRequest $request, Attendances_symptoms $attendances_symptoms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendancesSymptoms  $attendancesSymptoms
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendancesSymptoms $attendancesSymptoms, $attendance_id, $id)
    {
        return $attendancesSymptoms->find($id)->delete();
    }
}
