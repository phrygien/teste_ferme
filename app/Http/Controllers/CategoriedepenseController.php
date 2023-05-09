<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriedepenseController extends Controller
{
    public function page()
    {
        return view('parametrages/categorie_depense/page');
    }
}
