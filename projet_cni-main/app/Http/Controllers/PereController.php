<?php

namespace App\Http\Controllers;

use App\Models\Pere;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pere()
    {
        $pere=Pere::all();
        return $pere;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pere = new Pere();
        $pere->nompere=request('nompere');
        $pere->prenompere=request('prenompere');
        $pere->datenaisspere=request('datenaisspere');
        $pere->idprofession=1;
        $pere->save();
        return redirect('enregistrement_mere');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pere  $pere
     * @return \Illuminate\Http\Response
     */
    public function show(Pere $pere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pere  $pere
     * @return \Illuminate\Http\Response
     */
    public function edit(Pere $pere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pere  $pere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pere $pere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pere  $pere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pere $pere)
    {
        //
    }
}
