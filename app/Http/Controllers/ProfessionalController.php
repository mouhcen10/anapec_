<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionalRequest;
use App\Models\Offre;
use App\Models\Professional;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfessionalController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listOffres($id)
    {
        $professional = Professional::with('offres')->findOrFail($id);
        return view('professional.listOffres', [
            'professional' => $professional
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showOffre($prof_id ,$id)
    {
        $professional = Professional::where('id', $prof_id)->first();
        $offre = Offre::where('professional_id',$professional->id)->where('id', $id)->first();
        return view('offre.offreProf', [
            'offre' => $offre
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professional.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $validatedata = $request->validate();
        
        $user = new User();
        $user->cin = $request->cin;
        $user->name = $request->nom;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->is_prof = true;
        $user->save();

        $professional = new Professional();
        $professional->user_id = $user->id;
        $professional->raison_sociale = $request->raison_sociale;
        $professional->entreprise = $request->entreprise;
        $professional->secteur = $request->secteur;
        $professional->cin = $request->cin;
        $professional->nom = $request->nom;
        $professional->prenom = $request->prenom;
        $professional->num_aff_cnss = $request->num_aff_cnss;
        $professional->fonction = $request->fonction;
        $professional->email = $request->email;
        $professional->password = Hash::make($request->password);
        $professional->adress = $request->adress;
        $professional->tel = $request->tel;
        $professional->gsm = $request->gsm;
        $professional->ville = $request->ville;
        $professional->commune = $request->commune;
        $professional->save();

        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professional = Professional::findOrFail($id);
        $en_cours = Offre::where('professional_id', $id)->where('etat','En cours')->count();
        $suspendue = Offre::where('professional_id', $id)->where('etat','Suspendue')->count();
        $conclue = Offre::where('professional_id', $id)->where('etat','Conclue')->count();
        $lastOffres = Offre::where('professional_id', $id)->where('created_at', '>', Carbon::now()->subDays(5))->get();
        return view('professional.profile', [
            'professional' => $professional,
            'en_cours' => $en_cours,
            'suspendue' => $suspendue,
            'conclue' => $conclue,
            'lastOffres' => $lastOffres
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function edit(Professional $professional)
    {
        // $professional = Professional::findOrFail($id);
        return view('professional.edit', [
            'professional' => $professional
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professional $professional)
    {
        $user = User::where('id',$professional->user_id)->first();
        $user->cin = $request->cin;
        $user->name = $request->nom;
        $user->email = $request->email;
        if($user->password == $request->password){
            $user->password == $request->password;
        }
        else{
            $user->password = Hash::make($request->password);
        }
        $user->is_prof = true;
        $user->save();

        $professional->user_id = $user->id;
        $professional->raison_sociale = $request->raison_sociale;
        $professional->entreprise = $request->entreprise;
        $professional->secteur = $request->secteur;
        $professional->cin = $request->cin;
        $professional->nom = $request->nom;
        $professional->prenom = $request->prenom;
        $professional->num_aff_cnss = $request->num_aff_cnss;
        $professional->fonction = $request->fonction;
        $professional->email = $request->email;

        if($professional->password == $request->password){
            $professional->password == $request->password;
        }
        else{
            $professional->password = Hash::make($request->password);
        }

        $professional->adress = $request->adress;
        $professional->tel = $request->tel;
        $professional->gsm = $request->gsm;
        $professional->ville = $request->ville;
        $professional->commune = $request->commune;
        $professional->save();

        return redirect()->route('professionals.show', ['professional' =>$professional->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professional $professional)
    {
        //
    }
}
