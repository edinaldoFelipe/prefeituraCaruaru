<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAttendancesRequest;
use App\Http\Requests\UpdateAttendancesRequest;
use App\Models\Attendances;

class AttendancesController extends Controller
{
    /**
     * Display view list.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        return view('attendances.list');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return Attendances::with('collaborator', 'patient', 'health_unit', 'drugs', 'symptoms')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('attendances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendancesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendancesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendances  $attendances
     */
    public function show(Attendances $attendances, string $id)
    {
        //withTrashed()
        return $attendances::with('collaborator', 'patient', 'health_unit', 'drugs', 'symptoms')->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendances  $attendances
     * @return \Illuminate\View\View
     */
    public function edit(Attendances $attendances, $hash)
    {
        return view('attendances.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendancesRequest  $request
     * @param  \App\Models\Attendances  $attendances
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendancesRequest $request, Attendances $attendances)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendances  $attendances
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendances $attendances, string $id)
    {
        return $attendances->find($id)->delete();
    }
}
