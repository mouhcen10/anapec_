<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfessionalRequest;
use App\Models\Professional;
use App\Models\User;
use Illuminate\Http\Request;
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
        $user->user_type = 'professionnel';
        $user->save();

        $professional = new Professional();
        $professional->user_id = $user->id;
        $professional->raison_sociale = $request->raison_sociale;
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
        return view('professional.profile', [
            'professional' => $professional
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
        $user->user_type = 'professionnel';
        $user->save();

        $professional->user_id = $user->id;
        $professional->raison_sociale = $request->raison_sociale;
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
