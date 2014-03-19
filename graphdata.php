<?php
ini_set('display_errors', 'On');

include_once "datamanager.php";

//gets a string of the data from a data array string so that it is ready to be used by Highcharts
function graphStringFromDataArray($dataString){
    $output = "[";
    foreach($dataString as $row)
    {
        $output = $output."[";
        $i = 0;
        foreach($row as $element){
            if ($i==0){
                $element=floatval($element)*1000;
            }
            $output = $output.$element.",";
            $i+=1;
        }
        $output = rtrim($output, ",");
        $output = $output."],";
    }
    $output = rtrim($output, ",");
    $output = $output."]";
    return $output;
}

//prepare the data code from each sensor for a graph, puts in correct sensor id and uses graphStringFromDataArray() to prepare the data itself
function prepareDataForGraph($sensorsData, $idList){
    $result = "";
    $counter = 0;
    foreach($sensorsData as $sensorData){
        $result = $result."{
                        name: 'sensor ".$idList[$counter]."',
                        type: 'area',
                        data: ".graphStringFromDataArray($sensorData)."
                    },";
        $counter+=1;
    }
    //trim trailing ,
    rtrim($result, ",");
    return $result;
}

//get a new data manager to fetch the graph data

$ids = $_POST['sensorArray'];
$dataManager = new DataManager();
$sensorsData = array();
foreach($ids as $id){
    $sensorData = $dataManager->getDataList($id);
    array_push($sensorsData, $sensorData);
}
//prepares the JS for the graph
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
                text: '',
                style: {
                        color: 'black',
                        fontWeight: 'bold'
                    }
            },
            plotOptions: {
                area: {
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
                    fillOpacity: 0.1
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
            
            series: [".prepareDataForGraph($sensorsData, $ids)."]
        });
    });
    


</script>";
//echo the graph's code onto the page the graph is embedded in
echo $graphScript;
?>