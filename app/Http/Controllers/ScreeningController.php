<?php

namespace App\Http\Controllers;

use App\Models\Screening;
use App\Http\Requests\StoreScreeningRequest;
use App\Http\Requests\UpdateScreeningRequest;

class ScreeningController extends Controller
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
     * @param  \App\Http\Requests\StoreScreeningRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScreeningRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Screening  $screening
     * @return \Illuminate\Http\Response
     */
    public function show(Screening $screening)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Screening  $screening
     * @return \Illuminate\Http\Response
     */
    public function edit(Screening $screening)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScreeningRequest  $request
     * @param  \App\Models\Screening  $screening
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScreeningRequest $request, Screening $screening)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Screening  $screening
     * @return \Illuminate\Http\Response
     */
    public function destroy(Screening $screening)
    {
        //
    }
}
