<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function liste(){
        $etudiant = new Etudiant();
        $etudiant->nom = "ATTOISSE";
        $etudiant->age = 21;
        return view('etudiants/liste',['etudiants'=>$etudiant]); // etudiants c'est la variable au niveau de la vue
        //dd($etudiant);
        
    }
}
