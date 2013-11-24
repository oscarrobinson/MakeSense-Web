<?php
ini_set('display_errors', 'On');


include_once "datamanager.php";
$dataManager = new DataManager();
$dataArray=$dataManager->getDataList();
$graphScript = "<script>
$(function () {
        $('#graph').highcharts({
            chart: {
                type: 'spline'
            },
            title: {
                text: 'Light Sensor Reading'
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: { // don't display the dummy year
                    month: '%e. %b',
                    year: '%b'
                }
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
                        Highcharts.dateFormat('%e. %b', this.x) +': '+ this.y +' m';
                }
            },
            
            series: [{
                name: 'Light Sensor Data',
                data: ".$dataManager->graphStringFromDataArray($dataArray)."
          }]
        });
    });
    


</script>";
echo $graphScript;
?>