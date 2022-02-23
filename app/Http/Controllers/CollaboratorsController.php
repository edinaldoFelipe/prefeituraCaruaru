<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollaboratorsRequest;
use App\Http\Requests\UpdateCollaboratorsRequest;
use App\Models\Collaborators;

class CollaboratorsController extends Controller
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
     * @param  \App\Http\Requests\StoreCollaboratorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollaboratorsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function show(Collaborators $collaborators)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function edit(Collaborators $collaborators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCollaboratorsRequest  $request
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCollaboratorsRequest $request, Collaborators $collaborators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collaborators $collaborators)
    {
        //
    }
}
