<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'date_debut',
        'date_fin',
        'entreprise',
        'intitule_poste',
        'description'
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }
}
