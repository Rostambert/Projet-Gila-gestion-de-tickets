<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'salle',
        'poste',
        'batiment',
        'priorite',
        'user_id',
        'materiel_id',
        'etat_id',
    ];
}
