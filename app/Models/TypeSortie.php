<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSortie extends Model
{
    use HasFactory;

    protected $table = "type_sorties";

    protected $fillable = [
        'libelle',
        'actif'
    ];
}
