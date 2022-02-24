<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollaboratorsRequest;
use App\Http\Requests\UpdateCollaboratorsRequest;
use App\Models\Collaborators;

class CollaboratorsController extends Controller
{
    /**
     * Display view list.
     *
     * @return \Illuminate\View\View
     */
    public function list()
    {
        return view('collaborators.list');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Collaborators::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('collaborators.create');
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
    public function show(Collaborators $collaborators, $id)
    {
        return $collaborators::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Collaborators  $collaborators
     * @return \Illuminate\View\View
     */
    public function edit(Collaborators $collaborators)
    {
        return view('collaborators.edit');
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
    public function destroy(Collaborators $collaborators, $id)
    {
        return $collaborators::find($id)->delete();
    }
}
