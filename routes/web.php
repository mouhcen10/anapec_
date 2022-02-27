<?php

use App\Http\Controllers\CandidateController;
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

// Route::get('/profile', function () {
//     return view('candidat.profile');
// })->name('profile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{id}', [App\Http\Controllers\CandidateController::class, 'show'])->name('profile');
Route::post('/candidates', [App\Http\Controllers\CandidateController::class, 'store'])->name('candidates.store');
// Route::resource('candidates', CandidateController::class);
