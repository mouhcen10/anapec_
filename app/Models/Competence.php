<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    public function setBureautiqueAttribute($value)
    {
        $this->attributes['bureautique'] = json_encode($value);
    }

    public function getBureautiqueAttribute($value)
    {
        return $this->attributes['bureautique'] = json_decode($value);
    }
    
    public function setPermisConduireAttribute($value)
    {
        $this->attributes['permis_conduire'] = json_encode($value);
    }

    public function getPermisConduireAttribute($value)
    {
        return $this->attributes['permis_conduire'] = json_decode($value);
    }

    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }
}
