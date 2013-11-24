<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";
$dataManager = new DataManager();
$dataArray=$dataManager->getDataList();
$output = "<table><tr><th>Time</th><th>Light Intensity</th></tr>";

foreach($dataArray as $row)
{
    $output = $output."<tr>";
    foreach($row as $element){
        $output = $output."<td>".(string)$element."</td>";
    }
    $output = $output."</tr>";

}
$output = $output."</table>";  
echo $output;
?>