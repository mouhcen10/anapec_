<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidat.register');
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
            $user->is_prof = false;
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

            return redirect()->route('login');
        }

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
        if($user->password == $request->password){
            $user->password == $request->password;
        }
        else{
            $user->password = Hash::make($request->password);
        }
        $user->is_prof = false;
        $user->save();

        $candidate->user_id = $user->id;
        $candidate->cin = $request->cin;
        if($candidate->password == $request->password){
            $candidate->password == $request->password;
        }
        else{
            $candidate->password = Hash::make($request->password);
        }
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
        //
    }
}
