<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendances_symptomsRequest;
use App\Http\Requests\UpdateAttendances_symptomsRequest;
use App\Models\Attendances_symptoms;

class AttendancesSymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Attendances_symptoms  $attendances_symptoms
     * @return \Illuminate\Http\Response
     */
    public function show(Attendances_symptoms $attendances_symptoms)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendances_symptoms  $attendances_symptoms
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendances_symptoms $attendances_symptoms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendances_symptomsRequest  $request
     * @param  \App\Models\Attendances_symptoms  $attendances_symptoms
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendances_symptomsRequest $request, Attendances_symptoms $attendances_symptoms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendances_symptoms  $attendances_symptoms
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendances_symptoms $attendances_symptoms)
    {
        //
    }
}
