<?php

namespace App\Http\Controllers;

use App\Models\Kader;
use App\Http\Requests\StoreKaderRequest;
use App\Http\Requests\UpdateKaderRequest;

class KaderController extends Controller
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
     * @param  \App\Http\Requests\StoreKaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKaderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kader  $kader
     * @return \Illuminate\Http\Response
     */
    public function show(Kader $kader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kader  $kader
     * @return \Illuminate\Http\Response
     */
    public function edit(Kader $kader)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKaderRequest  $request
     * @param  \App\Models\Kader  $kader
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKaderRequest $request, Kader $kader)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kader  $kader
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kader $kader)
    {
        //
    }
}
