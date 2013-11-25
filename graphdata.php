<?php
ini_set('display_errors', 'On');


include_once "datamanager.php";
$dataManager = new DataManager();
$dataArray=$dataManager->getDataList();
$graphScript = "<script>
var graphColour = '#6E6E6E';

$(function () {
        $('#graph').highcharts({
            chart: {
            	zoomType: 'x',
                type: 'spline',
                backgroundColor: Highcharts.Color(graphColour).setOpacity(0).get('rgba')
                    
            },
            title: {
                text: 'Light Sensor Reading',
                style: {
                        color: 'black',
                        fontWeight: 'bold'
                    }
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1},
                        stops: [
                            [0, graphColour],
                            [1, Highcharts.Color(graphColour).setOpacity(0).get('rgba')]
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
                	animation: false,
                    color: graphColour
                }
            },

            xAxis: {
                type: 'datetime',
            },
            yAxis: {
                title: {
                    text: 'Light Intensity',
                    style: {
                        color: 'black',
                        fontWeight: 'bold'
                    }
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