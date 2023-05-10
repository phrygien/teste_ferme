<?php

namespace App\Http\Livewire;

use App\Models\ConstatOeuf;
use Illuminate\Support\Carbon;
use Livewire\Component;

class DonneejourConstantOeuf extends Component
{
    public $data = [];
    public $labels = [];

    public function mount()
    {
        $this->chargerDonneesChart();
    }

    public function render()
    {
        $totalDonneesJournalieres = ConstatOeuf::join('type_oeufs', 'constat_oeufs.id_type_oeuf', '=', 'type_oeufs.id')
        ->whereDate('date_entree', today())
        ->groupBy('id_type_oeuf', 'type_oeufs.type')
        ->selectRaw('id_type_oeuf, type_oeufs.type as nom_type_oeuf, SUM(nb) as total')
        ->get();

        return view('livewire.donneejour-constant-oeuf', compact('totalDonneesJournalieres'));
    }

    
    /*
    * chart
    */ 
    public function chargerDonneesChart()
    {
        $totalDonneesJournalieres = ConstatOeuf::join('type_oeufs', 'constat_oeufs.id_type_oeuf', '=', 'type_oeufs.id')
            ->whereDate('date_entree', Carbon::today())
            ->groupBy('id_type_oeuf', 'type_oeufs.type')
            ->selectRaw('id_type_oeuf, type_oeufs.type as nom_type_oeuf, SUM(nb) as total')
            ->get();

        $this->data = $totalDonneesJournalieres->pluck('total')->toArray();
        $this->labels = $totalDonneesJournalieres->pluck('nom_type_oeuf')->toArray();

        $this->emit('chartUpdated');
    }
}
