<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'diplome',
        'specialite',
        'option',
        'grp_etab',
        'etab',
        'annee_obt',
        'commentaire'
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }
}
