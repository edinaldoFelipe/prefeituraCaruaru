<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHealthUnitsRequest;
use App\Http\Requests\UpdateHealthUnitsRequest;
use App\Models\HealthUnits;

class HealthUnitsController extends Controller
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
     * @param  \App\Http\Requests\StoreHealthUnitsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHealthUnitsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HealthUnits  $healthUnits
     * @return \Illuminate\Http\Response
     */
    public function show(HealthUnits $healthUnits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HealthUnits  $healthUnits
     * @return \Illuminate\Http\Response
     */
    public function edit(HealthUnits $healthUnits)
    {
        //
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
    public function destroy(HealthUnits $healthUnits)
    {
        //
    }
}
