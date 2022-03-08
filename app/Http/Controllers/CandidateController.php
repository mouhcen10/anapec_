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
use Illuminate\Support\Facades\Crypt;
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
        // $candidates = Candidate::all();
        // return view('candidat.profile', [
        //     'candidates' => $candidates
        // ]);
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
            $user->password = Crypt::encrypt($request->password);
            $user->user_type = 'candidat';
            $user->save();

            $candidate = new Candidate();

            $candidate->user_id = $user->id;
            $candidate->cin = $request->cin;
            $candidate->password = Crypt::encrypt($request->password);
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

            if($request->has('mobilite_locale')){
                $candidate->mobilite_locale = true;
            }else{
                $candidate->mobilite_locale = false;
            }
            if($request->has('mobilite_regionale')){
                $candidate->mobilite_regionale = true;
            }else{
                $candidate->mobilite_regionale = false;
            }
            if($request->has('mobilite_nationale')){
                $candidate->mobilite_nationale = true;
            }else{
                $candidate->mobilite_nationale = false;
            }
            if($request->has('mobilite_internationale')){
                $candidate->mobilite_internationale = true;
            }else{
                $candidate->mobilite_internationale = false;
            }

            if($request->handicap == 'oui'){
                $candidate->handicap = true;
            }else{
                $candidate->handicap = false;
            }
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
                $experience->intitule_poste = $request->intitule_poste;
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

                if($request->has('word')){
                    $competence->word = true;
                }else{
                    $competence->word = false;
                }
                if($request->has('excel')){
                    $competence->excel = true;
                }else{
                    $competence->excel = false;
                }
                if($request->has('access')){
                    $competence->access = true;
                }else{
                    $competence->access = false;
                }
                if($request->has('powerpoint')){
                    $competence->powerpoint = true;
                }else{
                    $competence->powerpoint = false;
                }

                $competence->comp_specifiques = $request->comp_specifiques;

                if($request->has('permis_conduire_a')){
                    $competence->permis_conduire_a = true;
                }else{
                    $competence->permis_conduire_a = false;
                }
                if($request->has('permis_conduire_b')){
                    $competence->permis_conduire_b = true;
                }else{
                    $competence->permis_conduire_b = false;
                }
                if($request->has('permis_conduire_c')){
                    $competence->permis_conduire_c = true;
                }else{
                    $competence->permis_conduire_c = false;
                }
                if($request->has('permis_conduire_d')){
                    $competence->permis_conduire_d = true;
                }else{
                    $competence->permis_conduire_d = false;
                }
                if($request->has('permis_conduire_eb')){
                    $competence->permis_conduire_eb = true;
                }else{
                    $competence->permis_conduire_eb = false;
                }
                if($request->has('permis_conduire_ec')){
                    $competence->permis_conduire_ec = true;
                }else{
                    $competence->permis_conduire_ec = false;
                }
                if($request->has('permis_conduire_ed')){
                    $competence->permis_conduire_ed = true;
                }else{
                    $competence->permis_conduire_ed = false;
                }
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

        }
        return redirect()->route('candidates.show', ['candidate' => $candidate->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //->pluck('nom','prenom','email','gsm_1','updated_at','province')->all();
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
        $candidate = Candidate::with('formations','experiences','competences','activities','cvs')->where('id',$id)->first();
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
    public function update(Request $request,Candidate $candidate)
    {
        $user = User::where('id',$candidate->user_id)->first();
        $user->cin = $request->cin;
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = Crypt::encrypt($request->password);
        $user->user_type = 'candidat';
        $user->save();

        $candidate->user_id = $user->id;
        $candidate->cin = $request->cin;
        $candidate->password = Crypt::encrypt($request->password);
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

        if($request->mobilite_locale){
            $candidate->mobilite_locale = true;
        }else{
            $candidate->mobilite_locale = false;
        }
        if($request->mobilite_regionale){
            $candidate->mobilite_regionale = true;
        }else{
            $candidate->mobilite_regionale = false;
        }
        if($request->mobilite_nationale){
            $candidate->mobilite_nationale = true;
        }else{
            $candidate->mobilite_nationale = false;
        }
        if($request->mobilite_internationale){
            $candidate->mobilite_internationale = true;
        }else{
            $candidate->mobilite_internationale = false;
        }

        $candidate->handicap = $request->handicap;
        $candidate->nature_handicap = $request->nature_handicap;
        $candidate->save();

        // Upload Picture for current Candidate
        if($request->hasFile('picture')) {
        
            $path = $request->file('picture')->store('thumbnails');

            if($candidate->image) {
                Storage::delete($candidate->image->path);
                $candidate->image->path = $path;
                $candidate->image->save();
            }
            else {
                $candidate->image()->save(Image::make(['path' => $path]));
            }
        }
        // Update Formation
        if ($request->diplome_n != null) {
            $formation = new Formation();
            $formation->diplome = $request->diplome_n;
            $formation->specialite = $request->specialite_n;
            $formation->option = $request->option_n;
            $formation->grp_etab = $request->grp_etab_n;
            $formation->etab = $request->etab_n;
            $formation->annee_obt = $request->annee_obt_n;
            $formation->commentaire = $request->commentaire_n;
            $candidate->formations()->save($formation);
                
        }
        else {
            foreach($candidate->formations as $formation){
                $formation->diplome = $request->diplome;
                $formation->specialite = $request->specialite;
                $formation->option = $request->option;
                $formation->grp_etab = $request->grp_etab;
                $formation->etab = $request->etab;
                $formation->annee_obt = $request->annee_obt;
                $formation->commentaire = $request->commentaire;
                $candidate->formations()->save($formation);
            }  
        }
        // Update Experience
        if ($request->date_debut_n != null) {
            $experience = new Experience();
            $experience->date_debut = $request->date_debut_n;
            $experience->date_fin = $request->date_fin_n;
            $experience->entreprise = $request->entreprise_n;
            $experience->intitule_poste = $request->intitule_poste_n;
            $experience->description = $request->description_n;
            $candidate->experiences()->save($experience);
            
        }
        else{
            foreach($candidate->experiences as $experience){
                $experience->date_debut = $request->date_debut;
                $experience->date_fin = $request->date_fin;
                $experience->entreprise = $request->entreprise;
                $experience->intitule_poste = $request->intitule_poste;
                $experience->description = $request->description;
                $candidate->experiences()->save($experience);
            }
        }
        // Update Competence
        if ($request->langue != '[Langue]') {

            if ($candidate->competences->count() != 0) {
                foreach($candidate->competences as $competence){
                    $competence->candidate_id = $candidate->id;
                    $competence->langue_1 = $request->langue_1;
                    $competence->niveau_langue_1 = $request->niveau_langue_1;
                    $competence->langue_2 = $request->langue_2;
                    $competence->niveau_langue_2 = $request->niveau_langue_2;
                    $competence->langue_3 = $request->langue_3;
                    $competence->niveau_langue_3 = $request->niveau_langue_3;

                    if($request->has('word')){
                        $competence->word = true;
                    }else{
                        $competence->word = false;
                    }
                    if($request->has('excel')){
                        $competence->excel = true;
                    }else{
                        $competence->excel = false;
                    }
                    if($request->has('access')){
                        $competence->access = true;
                    }else{
                        $competence->access = false;
                    }
                    if($request->has('powerpoint')){
                        $competence->powerpoint = true;
                    }else{
                        $competence->powerpoint = false;
                    }

                    $competence->comp_specifiques = $request->comp_specifiques;

                    if($request->has('permis_conduire_a')){
                        $competence->permis_conduire_a = true;
                    }else{
                        $competence->permis_conduire_a = false;
                    }
                    if($request->has('permis_conduire_b')){
                        $competence->permis_conduire_b = true;
                    }else{
                        $competence->permis_conduire_b = false;
                    }
                    if($request->has('permis_conduire_c')){
                        $competence->permis_conduire_c = true;
                    }else{
                        $competence->permis_conduire_c = false;
                    }
                    if($request->has('permis_conduire_d')){
                        $competence->permis_conduire_d = true;
                    }else{
                        $competence->permis_conduire_d = false;
                    }
                    if($request->has('permis_conduire_eb')){
                        $competence->permis_conduire_eb = true;
                    }else{
                        $competence->permis_conduire_eb = false;
                    }
                    if($request->has('permis_conduire_ec')){
                        $competence->permis_conduire_ec = true;
                    }else{
                        $competence->permis_conduire_ec = false;
                    }
                    if($request->has('permis_conduire_ed')){
                        $competence->permis_conduire_ed = true;
                    }else{
                        $competence->permis_conduire_ed = false;
                    }
                    $competence->save();
                }
            }else{
                $competence = new Competence();
                $competence->candidate_id = $candidate->id;
                $competence->langue_1 = $request->langue_1;
                $competence->niveau_langue_1 = $request->niveau_langue_1;
                $competence->langue_2 = $request->langue_2;
                $competence->niveau_langue_2 = $request->niveau_langue_2;
                $competence->langue_3 = $request->langue_3;
                $competence->niveau_langue_3 = $request->niveau_langue_3;

                if($request->has('word')){
                    $competence->word = true;
                }else{
                    $competence->word = false;
                }
                if($request->has('excel')){
                    $competence->excel = true;
                }else{
                    $competence->excel = false;
                }
                if($request->has('access')){
                    $competence->access = true;
                }else{
                    $competence->access = false;
                }
                if($request->has('powerpoint')){
                    $competence->powerpoint = true;
                }else{
                    $competence->powerpoint = false;
                }

                $competence->comp_specifiques = $request->comp_specifiques;

                if($request->has('permis_conduire_a')){
                    $competence->permis_conduire_a = true;
                }else{
                    $competence->permis_conduire_a = false;
                }
                if($request->has('permis_conduire_b')){
                    $competence->permis_conduire_b = true;
                }else{
                    $competence->permis_conduire_b = false;
                }
                if($request->has('permis_conduire_c')){
                    $competence->permis_conduire_c = true;
                }else{
                    $competence->permis_conduire_c = false;
                }
                if($request->has('permis_conduire_d')){
                    $competence->permis_conduire_d = true;
                }else{
                    $competence->permis_conduire_d = false;
                }
                if($request->has('permis_conduire_eb')){
                    $competence->permis_conduire_eb = true;
                }else{
                    $competence->permis_conduire_eb = false;
                }
                if($request->has('permis_conduire_ec')){
                    $competence->permis_conduire_ec = true;
                }else{
                    $competence->permis_conduire_ec = false;
                }
                if($request->has('permis_conduire_ed')){
                    $competence->permis_conduire_ed = true;
                }else{
                    $competence->permis_conduire_ed = false;
                }
                $competence->save();
            }    
        }
        // Update Activities
        if ($request->title != null) {

            if ($candidate->activities->count() != 0) {
                foreach($candidate->activities as $activity){
                    $activity->candidate_id = $candidate->id;
                    $activity->title = $request->title;
                    $activity->save();
                }
            }else{
                $activity = new Activity();
                $activity->candidate_id = $candidate->id;
                $activity->title = $request->title;
                $activity->save();
            }    
        }
        // Update Cvs
        if ($request->cv != null) {

            if ($candidate->activities->count() != 0) {
                foreach($candidate->cvs as $cv){
                    $cv->candidate_id = $candidate->id;
                    $cv->file = $request->cv;
                    $cv->save();
                }
            }else{
                $cv = new Cv();
                $cv->candidate_id = $candidate->id;
                $cv->file = $request->cv;
                $cv->save();
            }
        }
        $request->session()->flash('status', 'Candidate was updated!');
        return redirect()->route('candidates.show', ['candidate' => $candidate->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $experience = Experience::findOrFail($id);
        // dd($experience);
        // $experience->delete();

        // return redirect()->route('candidates.edit', ['candidate' => $experience->candidate_id]);
    }
}
