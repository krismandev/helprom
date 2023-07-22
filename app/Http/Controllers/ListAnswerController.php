<?php

namespace App\Http\Controllers;

use App\Models\ListAnswer;
use App\Http\Requests\StoreListAnswerRequest;
use App\Http\Requests\UpdateListAnswerRequest;

class ListAnswerController extends Controller
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
     * @param  \App\Http\Requests\StoreListAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ListAnswer  $listAnswer
     * @return \Illuminate\Http\Response
     */
    public function show(ListAnswer $listAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ListAnswer  $listAnswer
     * @return \Illuminate\Http\Response
     */
    public function edit(ListAnswer $listAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateListAnswerRequest  $request
     * @param  \App\Models\ListAnswer  $listAnswer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateListAnswerRequest $request, ListAnswer $listAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ListAnswer  $listAnswer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListAnswer $listAnswer)
    {
        //
    }
}
