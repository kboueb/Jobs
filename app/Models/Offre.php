<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'reference_offre',
        'titre',
        'date_echeance',
        'contrat',
        'fonction',
        'pays',
        'date_emission',
        'description_poste'
    ];
}
