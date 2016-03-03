<script type="text/javascript">
$(function () {
    $('#container2').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Reporte Mensual'
        },
        tooltip: {
    	    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    color: '#000000',
                    connectorColor: '#000000',
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Share',
            data: [
                ['Andres L.',   45.0],
                ['Camilo D.',       26.8],
                {
                    name: 'Daniela A.',
                    y: 12.8,
                    sliced: true,
                    selected: true
                },
                ['Valentin W.',    8.5],
                ['Ernesto J.',     6.2],
                ['Otros',   0.7]
            ]
        }]
    });
});
</script>