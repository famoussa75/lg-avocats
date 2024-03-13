<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\visiteurController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/wp-admin', function () {
    $admin = DB::select("select * from users");
    return view('auth.login',compact('admin'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('changeLanguage/{lang}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');
Route::post('pages/admin/login', [UserController::class, 'verifAdmin'])->name('verifAdmin');

Route::get('/myAskAdmin', function () {
    return view('pages/admin/login');
})->name('myAskAdmin');

Route::get('/Mentions-légales', function () {
    return view('pages/policy');
})->name('policy');

Route::get('/home', function () {
    return view('pages/index');
})->name('accueil');



Route::get('/equipe', function () {
    return view('pages/equipe');
})->name('equipe');

Route::get('/mentions-legales', function () {
    return view('pages/mentions-legales');
})->name('mentions');

// About
Route::get('/about-us', function () {
    return view('pages/about');
})->name('about');

// Expertises
Route::get('/expertises', function () {
    return view('pages/expertises');
})->name('expertises');

// Blog
Route::get('/blog', [NewController::class, 'index'])->name('blog');


// Detail Blog
Route::get('/article/{slug}',  [NewController::class, 'show'])->name('detail');

// Contact
Route::get('/contact', function () {
    return view('pages/contact');
})->name('contact');

// About
Route::get('/ask-plaide', function () {
    return view('pages/plaidoirie');
})->name('ask-plaide');


// Team

Route::get('/paul-lazard-gbilimou', function () {
    return view('pages/team/team1');
})->name('team1');

Route::get('/thierno-diallo', function () {
    return view('pages/team/team2');
})->name('team2');



// Services

Route::get('/service-1', function () {
    return view('pages/services/service-1');
})->name('service-1');

Route::get('/service-2', function () {
    return view('pages/services/service-2');
})->name('service-2');

Route::get('/service-3', function () {
    return view('pages/services/service-3');
})->name('service-3');

Route::get('/service-4', function () {
    return view('pages/services/service-4');
})->name('service-4');

Route::get('/service-5', function () {
    return view('pages/services/service-5');
})->name('service-5');

Route::get('/service-6', function () {
    return view('pages/services/service-6');
})->name('service-6');

Route::get('/service-7', function () {
    return view('pages/services/service-7');
})->name('service-7');

// Admin

Route::GET('/myadmin/config/gestion-news', [NewController::class, 'news'])->name('gestion-news');
Route::GET('/myadmin/config/edit-article/{id_article}', [NewController::class, 'editArticle'])->name('edit-article');
Route::GET('/myadmin/config/delete/{id_article}', [NewController::class, 'deleteArticle'])->name('deleteArticle');
Route::GET('/article/{id_article}', [NewController::class, 'detailArticle'])->name('article');
Route::GET('/myadmin/config/newsletter', [visiteurController::class, 'newsLetter'])->name('newsletter');

Route::post('/store-article', [NewController::class, 'storeArticle'])->name('storeArticle');
Route::POST('article', [NewController::class, 'addCommentaire'])->name('addCommentaire');
Route::POST('updateArticle', [NewController::class, 'updateArticle'])->name('updateArticle');
Route::POST('newsletter', [NewController::class, 'updateArticle'])->name('updateArticle');

Route::POST('newVisitor', [visiteurController::class, 'newVisitor'])->name('newVisitor');
Route::get('deleteVisitor/{id}', [visiteurController::class, 'deleteVisitor'])->name('deleteVisitor');
Route::POST('sendNewletters', [visiteurController::class, 'sendNewletters'])->name('sendNewletters');

Route::GET('news', [NewController::class, 'index'])->name('news');


// Visiteurs

Route::POST('sendMessage', [visiteurController::class, 'sendMessage'])->name('sendMessage');
Route::POST('newVisitor', [visiteurController::class, 'newVisitor'])->name('newVisitor');

require __DIR__.'/auth.php';
