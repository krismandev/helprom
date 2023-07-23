<?php

namespace App\Http\Controllers;

use App\Models\ScreeningAnswer;
use App\Http\Requests\StoreScreeningAnswerRequest;
use App\Http\Requests\UpdateScreeningAnswerRequest;

class ScreeningAnswerController extends Controller
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
     * @param  \App\Http\Requests\StoreScreeningAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScreeningAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScreeningAnswer  $screeningAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(ScreeningAnswer $screeningAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScreeningAnswer  $screeningAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(ScreeningAnswer $screeningAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScreeningAnswerRequest  $request
     * @param  \App\Models\ScreeningAnswer  $screeningAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScreeningAnswerRequest $request, ScreeningAnswer $screeningAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScreeningAnswer  $screeningAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScreeningAnswer $screeningAnswer)
    {
        //
    }
}
