<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypepouletController extends Controller
{
    public function page()
    {
        return view('parametrages/type_poulet/page');
    }
}
