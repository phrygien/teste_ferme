<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function page()
    {
        return view('parametrages/batiment/page');
    }
}
