<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'identity', 'matricule', 'nom', 'prenom', 'grade', 'notation', 'annee', 'trimestre', 'note_total',
        'absence', 'nb_jour_travail', 'note1', 'note2', 'note3', 'note4', 'appreciation', 'pdf'
    ];

}
