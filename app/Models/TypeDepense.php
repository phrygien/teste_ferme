<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDepense extends Model
{
    use HasFactory;

    protected $table ="type_depenses";

    protected $fillable = [
        'type',
        'id_categorie',
        'actif',
    ];
}
