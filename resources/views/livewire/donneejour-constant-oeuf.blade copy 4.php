<div class="col-lg-12 col-sm-12">
    <div class="card mb-4">
        <div class="card-body">
            <div class="card-title">{{ __('Constats du jour')}}</div>
            <div id="chart" style="height: 300px;"></div>
        </div>
    </div>
</div>

<script>
// Initialisez le graphique avec l'élément HTML ciblé par son ID.
var chart = echarts.init(document.getElementById('chart'));

// Récupérez les données et les labels à partir du résultat de la requête
var data = @json($totalDonneesJournalieres->pluck('total')->toArray());
var labels = @json($totalDonneesJournalieres->pluck('nom_type_oeuf')->toArray());

// Calculer le nombre total
var total = data.reduce(function(acc, value) {
  return parseInt(acc) + parseInt(value);
}, 0);

// Configurez les options du graphique.
var options = {
  series: [
    {
      type: 'pie',
      data: data.map(function(value, index) {
        return { value: value, name: labels[index] };
      }),
      label: {
        show: true,
        position: 'outside',
        formatter: '{b}: {c} ({d}%)'
      }
    }
  ],
  tooltip: {
    formatter: '{b}: {c} ({d}%)'
  },
  legend: {
    data: labels
  },
  title: {
    text: 'Total: ' + total
  }
};

// Appliquez les options au graphique.
chart.setOption(options);
</script>
