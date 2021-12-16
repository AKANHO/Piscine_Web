<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntrepriseController;

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

Route::get('/dashboard', function () {
    return view('dashboards');
})->middleware(['auth'])->name('dashboard');

Route::get('/entreprise/create', 'App\Http\Controllers\EntrepriseController@createUserEntreprise');
Route::post('/entreprise/create', 'App\Http\Controllers\EntrepriseController@UserEntreprise');
Route::get('/entreprise', 'App\Http\Controllers\EntrepriseController@showUserEntreprise');

//Collab
Route::get('/collaborateurs/create', 'App\Http\Controllers\CollabController@createUserCollab');
Route::post('/collaborateurs/create', 'App\Http\Controllers\CollabController@UserCollab');

Route::post("add", [EntrepriseController::class, 'AddEntreprise']);

Route::get('/index', [EntrepriseController::class, 'index']);

Route::get('/entreprise/update', 'App\Http\Controllers\EntrepriseController@update');


require __DIR__.'/auth.php';
