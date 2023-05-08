<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePoulet extends Model
{
    use HasFactory;

    protected $table = "type_poulets";

    protected $fillable = [
        'type',
        'actif'
    ];
}
