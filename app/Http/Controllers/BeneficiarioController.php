<?php

namespace App\Http\Controllers;

use App\SHMCER;
use Illuminate\Http\Request;

class BeneficiarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($cedula)
    {

        $benficiario = SHMCER::where('CerPosCod', $cedula)->first();


        return [
            'beneficiario' => $benficiario,

        ];
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
     * @param  \App\SHMCER  $sHMCER
     * @return \Illuminate\Http\Response
     */
    public function show(SHMCER $sHMCER)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SHMCER  $sHMCER
     * @return \Illuminate\Http\Response
     */
    public function edit(SHMCER $sHMCER)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SHMCER  $sHMCER
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SHMCER $sHMCER)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SHMCER  $sHMCER
     * @return \Illuminate\Http\Response
     */
    public function destroy(SHMCER $sHMCER)
    {
        //
    }
}
