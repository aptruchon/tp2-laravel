<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    // Empêche _aucune_ colonne d'être remplie
    protected $fillable = [
        "col_id",
        "url",
        "width",
        "height",
        "slug"
    ];

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
