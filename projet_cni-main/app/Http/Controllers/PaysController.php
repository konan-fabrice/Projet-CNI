<?php

namespace App\Http\Controllers;

use App\Models\Pays;
use App\Http\Controllers\Controller;
use App\Models\Sexe;
use Illuminate\Http\Request;

class PaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
   
    public function index1()
    {
        $pays = Pays::all();
       return $pays;
    }
    public function index2()
    {
        $sexe = Sexe::all();
       return $sexe;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function show(Pays $pays)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function edit(Pays $pays)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pays $pays)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pays  $pays
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pays $pays)
    {
        //
    }
}
