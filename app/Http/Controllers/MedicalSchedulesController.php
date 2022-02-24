<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMedical_schedulesRequest;
use App\Http\Requests\UpdateMedical_schedulesRequest;
use App\Models\MedicalSchedules;

class MedicalSchedulesController extends Controller
{
    /**
     * Display view list.
     *
     * @return \\Illuminate\View\View
     */
    public function list()
    {
        return view('medicalschedules.list');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MedicalSchedules::with('collaborator', 'healt_hunit')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('medicalschedules.create');
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
     * @param  \App\Models\MedicalSchedules  $medicalSchedules
     * @return \Illuminate\Http\Response
     */
    public function show(MedicalSchedules $medicalSchedules, $id)
    {
        return $medicalSchedules::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MedicalSchedules  $medicalSchedules
     * @return \Illuminate\View\View
     */
    public function edit(MedicalSchedules $medicalSchedules)
    {
        return view('medicalschedules.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedical_schedulesRequest  $request
     * @param  \App\Models\MedicalSchedules  $medicalSchedules
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedical_schedulesRequest $request, MedicalSchedules $medicalSchedules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MedicalSchedules  $medicalSchedules
     * @return \Illuminate\Http\Response
     */
    public function destroy(MedicalSchedules $medicalSchedules, $id)
    {
        return $medicalSchedules::find($id)->delete();
    }
}
