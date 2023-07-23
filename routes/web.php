<?php

use App\Models\Articles;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ScreeningController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//route free access
Route::get('/', function () {
    return view('homepage', [
        'title' => 'Home',
        'categories' => Category::all(),
        'articles' => Articles::all()
    ]);
});

Route::get('/detail-article/{slug}', function ($slug) {
    $article = Articles::where('slug', $slug)->first();
    return view('detail_article', [
        'title' => 'Read Article',
        'categories' => Category::all(),
        'articles' => Articles::all(),
        'article' => $article
    ]);
});

//route access user not already login
Route::group(['middleware' => 'guest'], function () {
    //login
    Route::get('/login', function () {
        return view('login');
    })->name('login');
});

//route user already login
Route::group(['middleware' => 'auth'], function () {
    //dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard', [
            'title' => 'Dashboard'
        ]);
    });

    //categories
    Route::get('/category', [CategoryController::class, 'index']);

    //articles
    Route::get('/articles', [ArticlesController::class, 'index']);

    //Patients
    Route::get('/patients', [PatientController::class, 'index']);

    //Patients
    Route::get('/screening', [ScreeningController::class, 'index']);

    Route::get('test', function () {
        return view('test', [
            'title' => 'Test'
        ]);
    });

    //logout
    Route::get('/logout', function () {
        Auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    });
});
