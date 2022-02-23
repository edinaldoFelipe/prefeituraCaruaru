<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedical_schedulesRequest;
use App\Http\Requests\UpdateMedical_schedulesRequest;
use App\Models\Medical_schedules;

class MedicalSchedulesController extends Controller
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
     * @param  \App\Http\Requests\StoreMedical_schedulesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedical_schedulesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medical_schedules  $medical_schedules
     * @return \Illuminate\Http\Response
     */
    public function show(Medical_schedules $medical_schedules)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medical_schedules  $medical_schedules
     * @return \Illuminate\Http\Response
     */
    public function edit(Medical_schedules $medical_schedules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedical_schedulesRequest  $request
     * @param  \App\Models\Medical_schedules  $medical_schedules
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedical_schedulesRequest $request, Medical_schedules $medical_schedules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medical_schedules  $medical_schedules
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medical_schedules $medical_schedules)
    {
        //
    }
}
