<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormationController extends Controller
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
        $request->validate([
            'candidate_id' => 'required',
            'diplome' => 'required',
            'specialite' => 'required',
            'option' => 'required',
            'grp_etab' => 'required',
            'etab' => 'required',
            'annee_obt' => 'required'
        ]);

        $input = $request->all();
        Formation::create($input);

        return redirect()->route('candidates.show', ['candidate' => Auth::user()->candidate->id])->with('success','Formation ajoutée avec succès !');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formation $formation)
    {
        $formation->candidate_id = $request->candidate_id;
        $formation->diplome = $request->diplome;
        $formation->specialite = $request->specialite;
        $formation->option = $request->option;
        $formation->grp_etab = $request->grp_etab;
        $formation->etab = $request->etab;
        $formation->annee_obt = $request->annee_obt;
        $formation->commentaire = $request->commentaire;
        $formation->save();

        return redirect()->route('candidates.show', ['candidate' => Auth::user()->candidate->id])->with('success','Formation modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Formation::findOrFail($id)->delete();

        return redirect()->route('candidates.edit', ['candidate' => Auth::user()->candidate->id])->with('success','Formation supprimée avec succès !');
    }
}
