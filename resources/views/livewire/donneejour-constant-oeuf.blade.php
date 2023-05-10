
<div id="chart" style="height: 300px;"></div>

<script>
    var chart = echarts.init(document.getElementById('chart'));

    var data = @json($totalDonneesJournalieres->pluck('total')->toArray());
    var labels = @json($totalDonneesJournalieres->pluck('nom_type_oeuf')->toArray());

    var total = data.reduce(function(acc, value) {
    return parseInt(acc) + parseInt(value);
    }, 0);

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
    chart.setOption(options);

    </script>
