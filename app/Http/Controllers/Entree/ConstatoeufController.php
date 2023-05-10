<?php

namespace App\Http\Controllers\Entree;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConstatoeufController extends Controller
{
    public function page()
    {
        return view('gestion_entrees/constat_oeufs/page');
    }

    public function donneeJournalierConstat()
    {
        return view('gestion_entrees/constat_oeufs/donnee_journalier');
    }
}
