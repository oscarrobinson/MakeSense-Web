<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";
//create a new data manager to fetch the data
$dataManager = new DataManager();
$dataArray=$dataManager->getDataList();
//prepare the data taple
$output = "<table><tr><th>Time</th><th>Light Intensity</th></tr>";

//turn the data array fetched from the database into a HTML table
foreach($dataArray as $row)
{
    $output = $output."<tr>";
    foreach($row as $element){
        $output = $output."<td>".(string)$element."</td>";
    }
    $output = $output."</tr>";

}
$output = $output."</table>"; 
//show the table 

echo $output;
?>