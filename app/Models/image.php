<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    
    // Empêche _aucune_ colonne d'être remplie
    protected $guarded = [];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }

    public function couleur()
    {
        return $this->hasMany(Couleur::class);
    }

    public function visite()
    {
        return $this->hasMany(Visite::class);
    }
}
