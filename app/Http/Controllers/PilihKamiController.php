<?php

namespace App\Http\Controllers;

use App\Models\PilihKami;
use App\Http\Requests\StorePilihKamiRequest;
use App\Http\Requests\UpdatePilihKamiRequest;

class PilihKamiController extends Controller
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
     * @param  \App\Http\Requests\StorePilihKamiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePilihKamiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PilihKami  $pilihKami
     * @return \Illuminate\Http\Response
     */
    public function show(PilihKami $pilihKami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PilihKami  $pilihKami
     * @return \Illuminate\Http\Response
     */
    public function edit(PilihKami $pilihKami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePilihKamiRequest  $request
     * @param  \App\Models\PilihKami  $pilihKami
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePilihKamiRequest $request, PilihKami $pilihKami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PilihKami  $pilihKami
     * @return \Illuminate\Http\Response
     */
    public function destroy(PilihKami $pilihKami)
    {
        //
    }
}