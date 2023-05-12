<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypesortieController extends Controller
{
    public function page()
    {
        return view('parametrages/type_sortie/page');
    }
}
