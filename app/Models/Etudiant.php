<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public string $nom;
    public string $prenom;
    public int  $age;
    public string $langage;
    public string $niveau;

    public function moyenne()
    {
        
    }

}
