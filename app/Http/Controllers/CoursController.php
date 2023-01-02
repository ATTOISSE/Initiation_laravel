<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    public function cours(){
        $cours = new Cours();
        // $cours1 = new Cours();
        // $cours2 = new Cours();
        // $cours->numero = 1;
        // $cours->nom = "java";
        // $cours->duree = 30;

        $cours->numero = ["1","2","3"];
        $cours->nom = ["java","php","js"];
        $cours->duree = ["30","60","100"];
        // dd($cours);
        return view('listeCours',['cours'=>$cours]); // cours c'est la variable au niveau de la vue
    }
}
