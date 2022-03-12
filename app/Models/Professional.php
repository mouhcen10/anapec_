<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'raison_sociale',
        'secteur',
        'cin',
        'nom',
        'prenom',
        'email',
        'password',
        'adress',
        'gsm',
        'ville',
        'commune'
    ];

    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
