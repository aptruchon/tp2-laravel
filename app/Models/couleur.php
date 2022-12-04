<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class couleur extends Model
{
    use HasFactory;
        
    // Empêche _aucune_ colonne d'être remplie
    protected $guarded = [];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
