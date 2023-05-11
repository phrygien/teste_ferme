<div class="table-responsive">
    <div class="col-md-6 form-group mb-3">
        <label for="picker3">Afficher par date</label>
        <input type="date" id="selectedDate" class="form-control form-control-rounded" placeholder="yyyy-mm-dd" name="dp" wire:model="selectedDate" wire:ignor>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">{{ __('Type de oeuf')}}</th>
                <th scope="col" class="text-primary" width="340px">{{ __('Total constat ')}} - du - {{ $selectedDate }} - par type oeuf</th>
            </tr>
        </thead>
        <tbody>
            @forelse($totalDonneesJournalieres as $donnees)
            <tr>
                <td>{{ $donnees['nom_type_oeuf'] }}</td>
                <td><span class="badge bg-secondary text-white">{{ $donnees['total'] }}</span></td>
            </tr>
            @empty
                <div class="alert alert-info text-center">
                        {{ __('Pas de constat oeuf disponible !')}}
                </div>
            @endforelse ($totalDonneesJournalieres as $donnees)
        </tbody>
    </table>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectedDateInput = document.getElementById('picker3');
        
        selectedDateInput.addEventListener('change', function () {
            Livewire.emit('updatedSelectedDate', this.value);
        });
    });
</script>