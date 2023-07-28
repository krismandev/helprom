<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Http\Requests\StoreArticlesRequest;
use App\Http\Requests\UpdateArticlesRequest;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles', [
            'title' => 'Articles'
        ]);
    }

    public function featured()
    {
        return view('admin.featured_articles', [
            'title' => 'Featured Articles'
        ]);
    }
}
