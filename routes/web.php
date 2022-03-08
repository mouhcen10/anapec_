<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FormationController;
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
});

Route::get('/candidat', function () {
    return view('candidat.register');
})->name('candidat');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::resource('candidates', CandidateController::class);

Auth::routes();