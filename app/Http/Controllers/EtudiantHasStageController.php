<?php

namespace App\Http\Controllers;

use App\etudiant_has_stage;
use Illuminate\Http\Request;

class EtudiantHasStageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('societe.index',compact('societes'))->with('i', (request()->input('page', 1) - 1) * 5);    

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\etudiant_has_stage  $etudiant_has_stage
     * @return \Illuminate\Http\Response
     */
    public function show(etudiant_has_stage $etudiant_has_stage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\etudiant_has_stage  $etudiant_has_stage
     * @return \Illuminate\Http\Response
     */
    public function edit(etudiant_has_stage $etudiant_has_stage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\etudiant_has_stage  $etudiant_has_stage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, etudiant_has_stage $etudiant_has_stage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\etudiant_has_stage  $etudiant_has_stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(etudiant_has_stage $etudiant_has_stage)
    {
        //
    }
}
