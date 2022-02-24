<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendances_drugsRequest;
use App\Http\Requests\UpdateAttendances_drugsRequest;
use App\Models\AttendancesDrugs;

class AttendancesDrugsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($attendance_id)
    {
        return AttendancesDrugs::where('attendance_id', $attendance_id)->get();
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
     * @param  \App\Http\Requests\StoreAttendances_drugsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendances_drugsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AttendancesDrugs  $attendancesDrugs
     * @return \Illuminate\Http\Response
     */
    public function show(AttendancesDrugs $attendancesDrugs)
    {
        return AttendancesDrugs::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AttendancesDrugs  $attendancesDrugs
     * @return \Illuminate\Http\Response
     */
    public function edit(AttendancesDrugs $attendancesDrugs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendances_drugsRequest  $request
     * @param  \App\Models\AttendancesDrugs  $attendancesDrugs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendances_drugsRequest $request, AttendancesDrugs $attendancesDrugs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AttendancesDrugs  $attendancesDrugs
     * @return \Illuminate\Http\Response
     */
    public function destroy(AttendancesDrugs $attendancesDrugs, $attendance_id, $id)
    {
        return $attendancesSymptoms->find($id)->delete();
    }
}
