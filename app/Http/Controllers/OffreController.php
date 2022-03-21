<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres = Offre::all();
        return view('offre.index', [
            'offres' => $offres
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listOffres(Request $request)
    {
        if($request->motCle != null){
            $query = $request->motCle;
            $offres = Offre::where('poste','like','%'.$query.'%')->orWhere('description','like','%'.$query.'%')->get();
            
            return view('offre.offres', [
                'offres' => $offres
            ]);
        }
        if($request->type != null || $request->ville != null){
            $offres = Offre::where('type','like','%'.$request->type.'%')->orWhere('lieu_travail', $request->ville)->get();
            
            return view('offre.offres', [
                'offres' => $offres
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->professional_id);
        $input = $request->all();
        $input['professional_id'] = Auth::user()->professional->id;
        Offre::create($input);
        return redirect()->route('professionals.show', ['professional' =>Auth::user()->professional->id])->with('success','Offre crée avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $offre = Offre::findOrFail($id);
        return view('offre.show', [
            'offre' => $offre
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offre = Offre::findOrFail($id);
        return view('offre.edit', [
            'offre' => $offre
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Offre $offre)
    {
        $input = $request->all();
        $offre->fill($input)->save();

        return redirect()->route('professionals.show', ['professional' =>Auth::user()->professional->id])->with('success','Offre modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offre = Offre::findOrFail($id);
        $offre->delete();
        return redirect()->route('professionals.show', ['professional' =>Auth::user()->professional->id])->with('success','Offre supprimée avec succès !');
    }
}
