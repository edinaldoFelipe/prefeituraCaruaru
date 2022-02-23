<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHealth_unitsRequest;
use App\Http\Requests\UpdateHealth_unitsRequest;
use App\Models\Health_units;

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
     * @param  \App\Http\Requests\StoreHealth_unitsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHealth_unitsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Health_units  $health_units
     * @return \Illuminate\Http\Response
     */
    public function show(Health_units $health_units)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Health_units  $health_units
     * @return \Illuminate\Http\Response
     */
    public function edit(Health_units $health_units)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHealth_unitsRequest  $request
     * @param  \App\Models\Health_units  $health_units
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHealth_unitsRequest $request, Health_units $health_units)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Health_units  $health_units
     * @return \Illuminate\Http\Response
     */
    public function destroy(Health_units $health_units)
    {
        //
    }
}
