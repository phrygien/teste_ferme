<div>
    <label for="selectedDate">Sélectionner une date :</label>
    <input type="date" id="selectedDate" wire:model="selectedDate" wire:ignore />

    <!-- Affichage des données -->
    <div>
        @foreach ($totalDonneesJournalieres as $donnees)
            <p>{{ $donnees['nom_type_oeuf'] }} : {{ $donnees['total'] }}</p>
        @endforeach
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectedDateInput = document.getElementById('selectedDate');
        
        selectedDateInput.addEventListener('change', function () {
            Livewire.emit('updatedSelectedDate', this.value);
        });
    });
</script>
