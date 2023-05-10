<?php

namespace App\Http\Controllers\Entree;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CycleController extends Controller
{
    public function page()
    {
        return view('gestion_entrees/cycle/page');
    }
}
