<?php

namespace App\Http\Controllers;

use App\Models\QuestionGroup;
use App\Http\Requests\StoreQuestionGroupRequest;
use App\Http\Requests\UpdateQuestionGroupRequest;

class QuestionGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreQuestionGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionGroup  $questionGroup
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionGroup $questionGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionGroup  $questionGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionGroup $questionGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionGroupRequest  $request
     * @param  \App\Models\QuestionGroup  $questionGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionGroupRequest $request, QuestionGroup $questionGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionGroup  $questionGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuestionGroup $questionGroup)
    {
        //
    }
}
