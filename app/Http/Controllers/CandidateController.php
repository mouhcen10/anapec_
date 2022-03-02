<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Candidate;
use App\Models\Competence;
use App\Models\Cv;
use App\Models\Experience;
use App\Models\Formation;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('candidat.profile');
        $candidates = Candidate::all();
        return view('candidat.profile', [
            'candidates' => $candidates
        ]);
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
            $user->cin = $request->cin;
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
            $candidate['mobilite'] = $request->mobilite;
            $candidate->handicap = false;
            $candidate->nature_handicap = $request->nature_handicap;
            $candidate->nature_handicap = $request->nature_handicap;
            $candidate->save();

            // Upload Picture for current Candidate
            if($request->hasFile('picture')) {
            
                $path = $request->file('picture')->store('thumbnails');

                $image = new Image();
                $image->path = $path;
                $image->candidate_id = $candidate->id;

                $image->save();
            }

            if ($request->diplome !='[Type de diplome]') {

                $formation = new Formation();
                $formation->candidate_id = $candidate->id;
                $formation->diplome = $request->diplome;
                $formation->specialite = $request->specialite;
                $formation->option = $request->option;
                $formation->grp_etab = $request->grp_etab;
                $formation->etab = $request->etab;
                $formation->annee_obt = $request->annee_obt;
                $formation->commentaire = $request->commentaire;
                $formation->save();
            }

            if ($request->date_debut != null) {

                $experience = new Experience();
                $experience->candidate_id = $candidate->id;
                $experience->date_debut = $request->date_debut;
                $experience->date_fin = $request->date_fin;
                $experience->entreprise = $request->entreprise;
                $experience->intitule_poste = $request->intitule;
                $experience->description = $request->description;
                $experience->save();
            }

            if ($request->langue != '[Langue]') {

                $competence = new Competence();
                $competence->candidate_id = $candidate->id;
                $competence->langue_1 = $request->langue_1;
                $competence->niveau_langue_1 = $request->niveau_langue_1;
                $competence->langue_2 = $request->langue_2;
                $competence->niveau_langue_2 = $request->niveau_langue_2;
                $competence->langue_3 = $request->langue_3;
                $competence->niveau_langue_3 = $request->niveau_langue_3;
                $competence['bureautique'] = $request->bureautique;
                $competence->comp_specifiques = $request->comp_specifiques;
                $competence['permis_conduire'] = $request->permis_conduire;
                $competence->save();
            }

            if ($request->title != null) {

                $activity = new Activity();
                $activity->candidate_id = $candidate->id;
                $activity->title = $request->title;
                $activity->save();
            }

            if ($request->cv != null) {

                $cv = new Cv();
                $cv->candidate_id = $candidate->id;
                $cv->file = $request->cv;
                $cv->save();
            }

            return redirect()->route('profile', ['candidate' => $candidate->id]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidat.profile', [
            'candidate' => $candidate
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $candidate = Candidate::findOrFail($id);
        return view('candidat.edit', [
            'candidate' => $candidate
        ]);
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
