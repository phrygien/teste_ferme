<!-- livewire/donneejour-constant-oeuf.blade.php -->

<div>
    <div class="mb-4">
        <label for="selectedDate" class="block font-medium text-gray-700">Sélectionnez une date :</label>
        <input type="date" wire:model="selectedDate" id="selectedDate" class="form-input mt-1 block w-full">
    </div>

    <div id="chart" style="height: 400px;"></div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/echarts@5.2.2"></script>
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('chartUpdated', function () {
            const chartData = @json($totalDonneesJournalieres);

            // Extraire les données du tableau
            const data = chartData.map(item => item.total);
            const labels = chartData.map(item => item.nom_type_oeuf);

            // Initialiser le graphique ECharts
            const chart = echarts.init(document.getElementById('chart'));

            // Configurer les options du graphique
            const options = {
                xAxis: {
                    type: 'category',
                    data: labels,
                },
                yAxis: {
                    type: 'value',
                },
                series: [
                    {
                        data: data,
                        type: 'bar',
                    },
                ],
            };

            // Appliquer les options au graphique
            chart.setOption(options);
        });

        // Émettre un événement pour charger le graphique initial
        Livewire.emit('chartUpdated');
    });
</script>
@endpush
