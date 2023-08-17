<?php

use App\Models\Kader;
use App\Models\Gallery;
use App\Models\Patient;
use App\Models\Articles;
use App\Models\Category;
use App\Models\Screening;
use App\Models\QuestionGroup;
use App\Models\SiteContentSetting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\SiteContentSettingController;

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
    $dynamicContent = SiteContentSetting::first()->content;
    return view('homepage', [
        'title' => 'Home',
        'categories' => Category::all(),
        'articles' => Articles::where('featured', false)->limit(5)->get(),
        'featured' => Articles::where('featured', true)->limit(5)->get(),
        'homepage' => $dynamicContent['homepage']
    ]);
});

Route::get('about/pengurus', function () {
    $dynamicContent = SiteContentSetting::first()->content;
    return view('pengurus', [
        'title' => 'Pengurus HPU',
        'categories' => Category::all(),
        'member' => $dynamicContent['member']
    ]);
});

Route::get('about', function () {
    $dynamicContent = SiteContentSetting::first()->content;
    return view('about', [
        'title' => 'Tentang HPU',
        'categories' => Category::all(),
        'about' => $dynamicContent['about']
    ]);
});

Route::get('contact', function () {
    $dynamicContent = SiteContentSetting::first()->content;
    return view('contact', [
        'title' => 'Kontak',
        'categories' => Category::all(),
        'contact' => $dynamicContent['contact']
    ]);
});

Route::get('galleries', function () {
    return view('gallery', [
        'title' => 'Gallery',
        'categories' => Category::all(),
        'galleries' => Gallery::latest()->paginate(10)
    ]);
});


Route::get('/detail-article/{slug}', function ($slug) {
    $article = Articles::where('slug', $slug)->first();
    return view('detail_article', [
        'title' => 'Read Article',
        'categories' => Category::all(),
        'articles' => Articles::where('featured', false)->inRandomOrder()->limit(5)->get()->except($article->id),
        'featured' => Articles::where('featured', true)->inRandomOrder()->limit(5)->get()->except($article->id),
        'article' => $article
    ]);
});

Route::get('/category/{slug}', function ($slug) {
    $category = Category::where('slug', $slug)->first();
    return view('category_page', [
        'title' => $category->name,
        'category' => $category,
        'articles' => Articles::where('category_id', $category->id)->paginate(10),
        'categories' => Category::all(),
    ]);
});



//route access user not already login
Route::group(['middleware' => 'guest'], function () {
    //login
    Route::get('/login', function () {
        return view('login');
    })->name('login');
});

Route::get('test', function () {
    return view('admin.export_screening');
});

//route user already login
Route::group(['middleware' => 'auth'], function () {
    //dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'articles' => Articles::all()->count(),
            'patient' => Patient::all()->count(),
            'kader' => Kader::all()->count()
        ]);
    });

    //kader
    Route::get('/kader', [KaderController::class, 'index']);

    //categories
    Route::get('/category', [CategoryController::class, 'index']);

    //articles
    Route::get('/articles', [ArticlesController::class, 'index']);

    //featured articles
    Route::get('/featured-articles', [ArticlesController::class, 'featured']);

    //Patients
    Route::get('/peserta', [PatientController::class, 'index']);

    //Patients
    Route::get('/screening', [ScreeningController::class, 'index']);

    //Setting
    Route::get('/settings', [SiteContentSettingController::class, 'index']);

    //Setting
    Route::get('/gallery', [GalleryController::class, 'index']);

    //logout
    Route::get('/logout', function () {
        Auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    });
});
