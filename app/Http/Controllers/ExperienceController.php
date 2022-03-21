<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExperienceController extends Controller
{
    public function __construct() 
    {
      $this->middleware('auth');
    }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'candidate_id' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'entreprise' => 'required',
            'intitule_poste' => 'required'
        ]);

        $input = $request->all();
        if($validated){
            Experience::create($input);
        }

        return redirect()->route('candidates.show', ['candidate' => Auth::user()->candidate->id])->with('success','Experience ajoutée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Experience  $experience)
    {
        $experience->candidate_id = $request->candidate_id;
        $experience->date_debut = $request->date_debut;
        $experience->date_fin = $request->date_fin;
        $experience->entreprise = $request->entreprise;
        $experience->intitule_poste = $request->intitule_poste;
        $experience->description = $request->description;
        $experience->save();

        return redirect()->route('candidates.show', ['candidate' => Auth::user()->candidate->id])->with('success','Experience modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Experience  $experience
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // dd($experience);
        Experience::findOrFail($id)->delete();

        return redirect()->route('candidates.edit', ['candidate' => Auth::user()->candidate->id])->with('success','Experience supprimée avec succès !');
    }
}
