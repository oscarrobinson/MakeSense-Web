<?php
ini_set('display_errors', 'On');


include_once "datamanager.php";
$dataManager = new DataManager();
$dataArray=$dataManager->getDataList();
$graphScript = "<script>
$(function () {
        $('#graph').highcharts({
            chart: {
            	zoomType: 'x',
                type: 'spline'
            },
            title: {
                text: 'Light Sensor Reading'
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1},
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    lineWidth: 1,
                    marker: {
                        enabled: false
                    },
                    shadow: false,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                },
                series: {
                	animation: false
                }
            },

            xAxis: {
                type: 'datetime',
            },
            yAxis: {
                title: {
                    text: 'Light Intensity'
                },
                min: 0
            },
            tooltip: {
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        Highcharts.dateFormat('%e. %b %Y,  %H:%M:%S', this.x) +': '+ this.y;
                }
            },
            
            series: [{
                name: 'Light Sensor Data',
                type: 'area',
                data: ".$dataManager->graphStringFromDataArray($dataArray)."
          }]
        });
    });
    


</script>";
echo $graphScript;
?>