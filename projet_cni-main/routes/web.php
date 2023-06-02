<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PereController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\SexeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\EnrolerController;
use App\Http\Controllers\ConnexionController;

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




Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [ConnexionController::class, 'connexion'])->name('connexion');
Route::post('/demande', [EnrolerController::class, 'search'])->name('search');


Route::get('/accueil', function () {
    return view('accueil');
});

Route::get('/demande', function () {
    return view('demande');
});

Route::get('/accueil', [EnrolerController::class, 'count']);

//Route::post('/demande', 'EnrolerController@search')->name('search');
//Route::get('/demande', [EnrolerController::class, 'search'])->name('search');

Route::get('/enrolement', function () {
    return view('enrolement');
});

Route::get('/renouvellement', function () {
    return view('renouvellement');
});

Route::get('/retrait', function () {
    return view('retrait');
});

Route::get('/impression', function () {
    return view('impression');
});

Route::get('/enregistrement_mere', function () {
    return view('enregistrement_mere');
});
Route::post('/enregistrement_mere', 'App\Http\Controllers\MereController@create')->name('enregistrementmere');

Route::get('/enregistrementpere', function () {
    return view('enregistrementpere');
});

Route::post('/enregistrementpere', 'App\Http\Controllers\PereController@create')->name('enregistrementpere');
Route::get('/enrolement','App\Http\Controllers\EnrolerController@index')->name('enrolementPays');
Route::post('/enrolement','App\Http\Controllers\EnrolerController@create')->name('enrolement');

//Route::get('/enrolement','App\Http\Controllers\SexeController@index')->name('enrolementSexe');

Route::get('/enregistrementpere', 'App\Http\Controllers\ProfessionController@poste')->name('postpere');
Route::get('/enregistrement_mere', 'App\Http\Controllers\ProfessionController@poste')->name('postmere');
Route::get('/renouvellement', 'App\Http\Controllers\EnrolerController@affichage_renouvellement')->name('renouvellement');
Route::get('/demande', 'App\Http\Controllers\EnrolerController@affichage_demande')->name('demande');
Route::get('/retrait', 'App\Http\Controllers\EnrolerController@affichage_retrait')->name('retrait');

//Route::get('/enrolement', 'App\Http\Controllers\ProfessionController@poste')->name('postmere');

Route::get('/impression', [PdfController::class, 'index'])->name('impression');
Route::get('/pdf/{id?}', [PdfController::class, 'generatePDF'])->name('pdf.generate');


