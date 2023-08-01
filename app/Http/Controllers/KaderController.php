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
        return view('admin.kader', [
            'title' => 'Kader'
        ]);
    }
}
