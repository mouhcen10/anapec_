<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Competence $competence)
    {
        $competence->candidate_id = $request->candidate_id;
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

        return redirect()->route('candidates.show', ['candidate' => $request->candidate_id]);
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
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competence  $competence)
    {
            $competence->candidate_id = $request->candidate_id;
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

        return redirect()->route('candidates.show', ['candidate' => $request->candidate_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
