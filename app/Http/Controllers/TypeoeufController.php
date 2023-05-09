<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypeoeufController extends Controller
{
    public function page()
    {
        return view('parametrages/type_oeuf/page');
    }
}
