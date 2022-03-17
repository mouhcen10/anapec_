<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulation extends Model
{
    use HasFactory;

    protected $fillable = [
        'offre_id',
        'candidate_id',
        'motivations'
    ];

    public function offre(){
        return $this->belongsTo(Offre::class);
    }

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
