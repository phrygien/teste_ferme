<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Site;

class Batiment extends Model
{
    use HasFactory;

    protected $table = "batiments";

    protected $fillable = [
        'nom',
        'id_site',
        'actif'
    ];

    public function siteRelation()
    {
        return $this->belongsTo(Site::class, 'id_site');
    }
}
