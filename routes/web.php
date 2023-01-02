<?php

use App\Models\Etudiant;
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
Route::get('/liste',  [App\Http\Controllers\EtudiantController::class,'liste']); 
Route::get('/cours',  [App\Http\Controllers\CoursController::class,'cours']); 
// liste1 c'est le nom qui s'affichera dans l'url et la 2e c'est la fonction qui se trouve dans le controlleur
  
  

