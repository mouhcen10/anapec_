<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'langue_1',
        'niveau_langue_1',
        'langue_2',
        'niveau_langue_2',
        'langue_3',
        'niveau_langue_3',
        'word',
        'excel',
        'access',
        'powerpoint',
        'comp_specifiques',
        'permis_conduire_a',
        'permis_conduire_b',
        'permis_conduire_c',
        'permis_conduire_d',
        'permis_conduire_eb',
        'permis_conduire_ec',
        'permis_conduire_ed'
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }
}
