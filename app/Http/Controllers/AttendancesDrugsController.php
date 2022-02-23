<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendances_drugsRequest;
use App\Http\Requests\UpdateAttendances_drugsRequest;
use App\Models\Attendances_drugs;

class AttendancesDrugsController extends Controller
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
     * @param  \App\Models\Attendances_drugs  $attendances_drugs
     * @return \Illuminate\Http\Response
     */
    public function show(Attendances_drugs $attendances_drugs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendances_drugs  $attendances_drugs
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendances_drugs $attendances_drugs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendances_drugsRequest  $request
     * @param  \App\Models\Attendances_drugs  $attendances_drugs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendances_drugsRequest $request, Attendances_drugs $attendances_drugs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendances_drugs  $attendances_drugs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendances_drugs $attendances_drugs)
    {
        //
    }
}
