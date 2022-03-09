<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'title'
    ];

    public function candidate() {
        return $this->belongsTo(Candidate::class);
    }
}
