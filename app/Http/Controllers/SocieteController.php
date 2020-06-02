<?php

namespace App\Http\Controllers;



use App\societe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void \Illuminate\Http\Response*/


      public function index()
      {
        $societes = societe::latest()->paginate(5);
		return view('societe.index',compact('societes'))->with('i', (request()->input('page', 1) - 1) * 5);
      }
    
    
    
    /*
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('societe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->validationRules());

        $societe = new Societe;
        $societe->nom= $request->societe_nom;
        $societe->adresse = $request->societe_adresse;
        $societe->email = $request->societe_email;
        $societe->tel = $request->societe_tel;
        $societe->user_id = Auth::id();
        $societe->save();
        return redirect()->route('societe.index')->with('AddSociete', 'Une nouveau societe ajoutée avec succées');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function show(societe $societe)
    {
        return view('societe.show')->with('societe', $societe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function edit(societe $societe)
    {
        return view('societe.edit',compact('societe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, societe $societe)
    {
        $validatedData = $request->validate($this->validationRules());

        $societe->update($validatedData);

        return redirect()->route('societe.show', $societe->id)->with('updateSociete', 'Societe modifiée avec succées ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function destroy(societe $societe)
    {
        $societe->delete();

        return redirect()->route('societe.index')->with('deleteSociete', 'Societe supprimée avec succées ');
    }

    private function validationRules()
    {
        return [
            'societe_nom' => 'required',
            'societe_adresse' => 'required',
            'societe_email' => 'required',
            'societe_tel'=>'required',
        ];
    }
}
