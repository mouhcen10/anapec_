<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Cv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use File;

class CvController extends Controller
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
    public function store(Request $request)
    {
        // Upload Cv PDF for current Candidate
        if($request->hasFile('file')) {
            
            $path = $request->file('file')->store('pdfs');

            $cv = new Cv();
            $cv->file = $path;
            $cv->candidate_id = $request->candidate_id;

            $cv->save();
        }

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cv $cv)
    {
        $cv = Cv::where('candidate_id', $request->candidate_id)->first();
        
        // Upload Cv PDF for current Candidate
        if($request->hasFile('file')) {
        
            $path = $request->file('file')->store('pdfs');

            if($cv) {
                Storage::delete($cv->file);
                $cv->file = $path;
                $cv->save();
            }
            else {
                $cv->save(Cv::make(['file' => $path]));
            }
        }

        return redirect()->route('candidates.show', ['candidate' => $request->candidate_id]);
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
        return redirect()->route('candidates.edit', ['candidate' => $request->candidate_id]);
    }

    public function download($id)
    {
        $cv = Cv::findOrFail($id);
        $url = $cv->file;

        return Storage::download($url);
    }
}
