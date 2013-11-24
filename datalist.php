<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";
$dataManager = new DataManager();
$dataArray=$dataManager->getDataList();
$output = "<table><tr><th>Time</th><th>Light Intensity</th></tr>";

foreach($dataArray as $row)
{
    $output = $output."<tr>";
    $i=0;
    foreach($row as $element){
    	if($i==0){
    		$element=intval(floatval($element)*1000);
    	}
        $output = $output."<td>".(string)$element."</td>";
        $i+=1;
    }
    $output = $output."</tr>";

}
$output = $output."</table>";  
echo $output;
?>