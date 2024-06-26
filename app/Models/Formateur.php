<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;
    protected $fillable = ['matricule','nom', 'prenom', 'genre', 'date_naissance', 'salaire'];


    public function groupes(){
        return $this->belongsToMany(Groupe::class)->withPivot(['groupe_id','annee_formation']);
    }
}
