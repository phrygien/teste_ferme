<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOeuf extends Model
{
    use HasFactory;

    protected $table = "type_oeufs";

    protected $fillable = [
        'type',
        'actif'
    ];
}
