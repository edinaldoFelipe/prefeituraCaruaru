<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Attendances;

class PatientsAttendancesController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($patient_id)
    {
        return Attendances::where('patient_id', $patient_id) -> get();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendances  $attendances
     * @return \Illuminate\Http\Response
     */
    public function show(Attendances $attendances, $patient_id, $attendance_id)
    {
        return $attendances::find($attendance_id);
    }
}