<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHealthUnitsRequest;
use App\Http\Requests\UpdateHealthUnitsRequest;
use App\Models\HealthUnits;

class HealthUnitsController extends Controller
{
    /**
     * Display view list.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        return view('healthunits.list');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return HealthUnits::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('healthunits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHealthUnitsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHealthUnitsRequest $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthUnits  $healthUnits
     * @return \Illuminate\Http\Response
     */
    public function show(HealthUnits $healthUnits, $id)
    {
        return $healthUnits::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HealthUnits  $healthUnits
     * @return \Illuminate\View\View
     */
    public function edit(HealthUnits $healthUnits)
    {
        return view('healthunits.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHealthUnitsRequest  $request
     * @param  \App\Models\HealthUnits  $healthUnits
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHealthUnitsRequest $request, HealthUnits $healthUnits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HealthUnits  $healthUnits
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthUnits $healthUnits, $id)
    {
        return $healthUnits::find($id)->delete();
    }
}
