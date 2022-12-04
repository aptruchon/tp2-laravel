<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Empêche _aucune_ colonne d'être remplie
    protected $fillable = [
        "name",
        "slug"
    ];

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
