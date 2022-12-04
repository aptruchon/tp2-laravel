<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    // Empêche _aucune_ colonne d'être remplie
    protected $fillable = [
        "img_id",
        "date",
        "userAgent"
    ];

    public function Image()
    {
        return $this->belongsTo(Image::class);
    }
}
