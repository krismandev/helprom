<?php

namespace App\Http\Controllers;

use App\Models\SiteContentSetting;
use App\Http\Requests\StoreSiteContentSettingRequest;
use App\Http\Requests\UpdateSiteContentSettingRequest;

class SiteContentSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('admin.settings', [
            'title' => 'Settings'
        ]);
    }
}
