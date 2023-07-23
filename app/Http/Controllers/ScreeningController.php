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

        return view('admin.screening', [
            'title' => 'Screenings'
        ]);
    }
}
