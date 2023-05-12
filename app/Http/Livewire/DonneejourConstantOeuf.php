<?php

namespace App\Http\Livewire;

use App\Models\ConstatOeuf;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DonneejourConstantOeuf extends Component
{    
    public function render()
    {
        $constatsDuJour = ConstatOeuf::select(
            'type_oeufs.type',
            DB::raw('count(*) as total_constats'),
            DB::raw('sum(nb) as total_nb')
        )
            ->join('type_oeufs', 'constat_oeufs.id_type_oeuf', '=', 'type_oeufs.id')
            ->whereDate('constat_oeufs.date_entree', '=', now()->format('Y-m-d'))
            ->groupBy('type_oeufs.type')
            ->get();


        return view('livewire.donneejour-constant-oeuf',[
            'constatsDuJour' => $constatsDuJour
        ]);
    }
}
