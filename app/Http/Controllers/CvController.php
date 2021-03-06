<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Cv;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Illuminate\Support\Facades\Auth;
use PDF;

class CvController extends Controller
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
        // Upload Cv PDF for current Candidate
        if($request->hasFile('file')) {
            
            $ext = $request->file('file')->extension();
            $cv = new Cv();
            $path = $request->file('file')->storeAs('pdfs',Auth::user()->name.'_'.Auth::user()->cin.'.'.$ext);
            $cv->file = $path;
            $cv->candidate_id = $request->candidate_id;

            $cv->save();
        }

        return redirect()->route('candidates.show', ['candidate' => $request->candidate_id])->with('success','CV ajouté avec succès !');
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
    public function update(Request $request, Cv $cv)
    {
        $cv = Cv::where('candidate_id', $request->candidate_id)->first();
        
        // Upload Cv PDF for current Candidate
        if($request->hasFile('file')) {
            $ext = $request->file('file')->extension();
            $path = $request->file('file')->storeAs('pdfs',Auth::user()->name.'_'.Auth::user()->cin.'.'.$ext);

            if($cv) {
                Storage::delete($cv->file);
                $cv->file = $path;
                $cv->save();
            }
            else {
                $cv->save(Cv::make(['file' => $path]));
            }
        }

        return redirect()->route('candidates.show', ['candidate' => $request->candidate_id])->with('success','CV modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Cv::findOrFail($id)->delete();
        return redirect()->route('candidates.edit', ['candidate' => $request->candidate_id])->with('success','CV supprimé avec succès !');
    }

    public function download($id)
    {
        $cv = Cv::findOrFail($id);
        $url = $cv->file;

        return Storage::download($url);
    }

    public function convertToPdf(Request $request)
    {
        // $candidate = Candidate::where('id', $request->candidate_id)->first();
        $pdf = FacadePdf::loadView('candidat.modal');
        return $pdf->download('test.pdf');
    }
}
