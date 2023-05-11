<?php

namespace App\Http\Livewire;

use App\Models\ConstatOeuf;
use Illuminate\Support\Carbon;
use Livewire\Component;

class DonneejourConstantOeuf extends Component
{
    public $selectedDate;
    public $totalDonneesJournalieres = [];

    public function mount()
    {
        $this->selectedDate = date('Y-m-d');
        $this->loadChartData();
    }

    public function render()
    {
        return view('livewire.donneejour-constant-oeuf');
    }

    public function loadChartData()
    {
        $this->totalDonneesJournalieres = ConstatOeuf::join('type_oeufs', 'constat_oeufs.id_type_oeuf', '=', 'type_oeufs.id')
            ->whereDate('date_entree', $this->selectedDate)
            ->groupBy('id_type_oeuf', 'type_oeufs.type')
            ->selectRaw('id_type_oeuf, type_oeufs.type as nom_type_oeuf, SUM(nb) as total')
            ->get()
            ->toArray();

        $this->emit('chartUpdated', $this->totalDonneesJournalieres);
    }

    public function updatedSelectedDate()
    {
        $this->loadChartData();
    }
}
