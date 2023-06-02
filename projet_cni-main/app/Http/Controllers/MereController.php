<?php

namespace App\Http\Controllers;

use App\Models\Mere;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mere()
    {
        $mere = Mere::all();
        return $mere;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $mere =new Mere();
        $mere->nommere=request('nommere');
        $mere->prenommere=request('prenommere');
        $mere->datenaissmere=request('datenaissmere');
        $mere->idprofession=1;
        $mere->save();
        return redirect('enrolement');
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
     * @param  \App\Models\Mere  $mere
     * @return \Illuminate\Http\Response
     */
    public function show(Mere $mere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mere  $mere
     * @return \Illuminate\Http\Response
     */
    public function edit(Mere $mere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mere  $mere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mere $mere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mere  $mere
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mere $mere)
    {
        //
    }
}
