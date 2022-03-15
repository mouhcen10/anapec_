<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'professional_id',
        'ref',
        'type',
        'contrat',
        'poste',
        'date',
        'etat',
        'description',
        'nbr_postes',
        'lieu_travail',
    ];

    public function professional(){
        return $this->belongsTo(Professional::class);
    }
}
