<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('candidat.profile');
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
            'cin' => 'required',
            'password' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'situation_f' => 'required',
            'date_nais' => 'required',
            'adress' => 'required',
            'province' => 'required',
            'commune' => 'required',
            'email' => 'required|email|unique:candidates',
            'gsm_1' => 'required',
            'situation_prof' => 'required'
        ]);

        if ($validated) {
            $user = new User();
            $user->name = $request->nom;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            $candidate = new Candidate();

            $candidate->user_id = $user->id;
            $candidate->cin = $request->cin;
            $candidate->password = Hash::make($request->password);
            $candidate->nom = $request->nom;
            $candidate->prenom = $request->prenom;
            $candidate->sexe = $request->sexe;
            $candidate->situation_f = $request->situation_f;
            $candidate->date_nais = $request->date_nais;
            $candidate->adress = $request->adress;
            $candidate->province = $request->province;
            $candidate->commune = $request->commune;
            $candidate->email = $request->email;
            $candidate->gsm_1 = $request->gsm_1;
            $candidate->gsm_2 = $request->gsm_2;
            $candidate->tel = $request->tel;
            $candidate->situation_prof = $request->situation_prof;
            $candidate->au_chomage = $request->au_chomage;
            $candidate->mobilite = $request->mobilite;
            $candidate->handicap = false;
            $candidate->nature_handicap = $request->nature_handicap;
            $candidate->save();

            if ($request->diplome !='[Type de diplome]') {

                $formation = new Formation();
                $formation->candidate_id = $candidate->id;
                $formation->diplome = $request->diplome;
                $formation->specialite = $request->specialite;
                $formation->option = $request->option;
                $formation->grp_etab = $request->grp_etab;
                $formation->etab = $request->etab;
                $formation->save();
            }

            return redirect()->route('candidates.index');
        }
        else{
            return 'failed';
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Candidate $candidate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }
}
