<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cin',
        'password',
        'nom',
        'prenom',
        'sexe',
        'situation_f',
        'date_nais',
        'adress',
        'province',
        'commune',
        'email',
        'gsm_1',
        'situation_prof',
    ];

    public function image(){
        return $this->hasOne(Image::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function formations() {
        return $this->hasMany(Formation::class);
    }
    public function experiences() {
        return $this->hasMany(Experience::class);
    } 
    public function competences() {
        return $this->hasMany(Competence::class);
    }
    public function activities() {
        return $this->hasMany(Activity::class);
    }
    public function cvs() {
        return $this->hasMany(Cv::class);
    }
}
