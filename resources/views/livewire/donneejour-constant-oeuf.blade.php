<div class="table-responsive">
    <div class="col-md-6 form-group mb-3">
        <label for="picker3">Afficher par date</label>
        <input type="date" id="selectedDate" class="form-control form-control-rounded" placeholder="yyyy-mm-dd" name="dp" wire:model="selectedDate" wire:ignor>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">{{ __('Type de oeuf')}}</th>
                <th scope="col" width="270px">{{ __('Total constat ')}} - du - {{ $selectedDate }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($totalDonneesJournalieres as $donnees)
            <tr>
                <td>{{ $donnees['nom_type_oeuf'] }}</td>
                <td><span class="badge bg-primary text-white">{{ $donnees['total'] }}</span></td>
            </tr>
            @endforeach
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