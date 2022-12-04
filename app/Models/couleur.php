<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class Couleur extends Model
{
    use HasFactory;
    use SoftDeletes;
        
    // Empêche _aucune_ colonne d'être remplie
    protected $fillable = [
        "img_id",
        "codeHexa"
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
