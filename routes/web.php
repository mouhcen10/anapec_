<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\PostulationController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\UpdatePasswordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

//Candidat Routes:
Route::group(['prefix' => 'experiences'], function () {
    Route::post('/', [ExperienceController::class, 'store'])->name('experiences.store');
    Route::put('/{experience}', [ExperienceController::class, 'update'])->name('experiences.update');
    Route::delete('/{experience}', [ExperienceController::class, 'destroy'])->name('experiences.destroy');
});

Route::group(['prefix' => 'formations'], function () {
    Route::post('/', [FormationController::class, 'store'])->name('formations.store');
    Route::put('/{formation}', [FormationController::class, 'update'])->name('formations.update');
    Route::delete('/{formation}', [FormationController::class, 'destroy'])->name('formations.destroy');
});

Route::group(['prefix' => 'competences'], function () {
    Route::post('/', [CompetenceController::class, 'store'])->name('competences.store');
    Route::put('/{competence}', [CompetenceController::class, 'update'])->name('competences.update');
    Route::delete('/{competence}', [CompetenceController::class, 'destroy'])->name('competences.destroy');
});

Route::group(['prefix' => 'activities'], function () {
    Route::post('/', [ActivityController::class, 'store'])->name('activities.store');
    Route::put('/{activity}', [ActivityController::class, 'update'])->name('activities.update');
    Route::delete('/{activity}', [ActivityController::class, 'destroy'])->name('activities.destroy');
});

Route::group(['prefix' => 'cvs'], function () {
    Route::post('/', [CvController::class, 'store'])->name('cvs.store');
    Route::put('/{cv}', [CvController::class, 'update'])->name('cvs.update');
    Route::delete('/{cv}', [CvController::class, 'destroy'])->name('cvs.destroy');
    Route::get('/download/{cv}', [CvController::class, 'download'])->name('download');
});
Route::get('/convert-to-pdf', [CvController::class, 'convertToPdf'])->name('convert');

Route::resource('candidates', CandidateController::class);
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/reset', [UpdatePasswordController::class, 'resetPassword'])->name('reset-password');
Route::put('/update-password', [UpdatePasswordController::class, 'updatePassword'])->name('update-password');
//End Candidat Routes

Route::resource('professionals', ProfessionalController::class);
Route::get('professionals/{professional}/offres', [ProfessionalController::class, 'listOffres'])->name('profOffres');
Route::get('professionals/{id}/offres/{offre}', [ProfessionalController::class, 'showOffre'])->name('show-offre');
Route::resource('offres', OffreController::class);
Route::get('/offres-query', [OffreController::class, 'listOffres'])->name('offres-query');
Route::resource('postulations', PostulationController::class);

Auth::routes();