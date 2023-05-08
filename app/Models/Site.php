<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Batiment;

class Site extends Model
{
    use HasFactory;

    protected $table = "sites";
    
    protected $fillable = [
        'site',
        'adresse',
        'actif'
    ];

    public function batiments()
    {
        return $this->hasMany(Batiment::class);
    }
}
