<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";
$dataManager = new DataManager();
$stringsArray=$dataManager->getRandomStrings();
$output = "<table>";
$count = 0;
$columns = 6;
foreach($stringsArray as $string)
{
    if ($count%$columns==0)
    {
        $output = $output."<tr>";
    }   
    $output = $output."<td>".$string."</td>";
    $count = $count + 1;
    if ($count%$columns==0)
    {
        $output = $output."</tr>";
    }   
}
if ($count%$columns!=0)
{
        $output = $output."</tr>";
}
$output = $output."</table>";  
echo $output;
?>