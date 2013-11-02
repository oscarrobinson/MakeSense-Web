<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";
$dataManager = new DataManager();
$stringsArray=$dataManager->getRandomStrings();
$output = "";
foreach($stringsArray as $string)
{
    $output = $output.$string."<br />";
}
echo $output;
?>