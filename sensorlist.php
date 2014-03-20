<?php
ini_set('display_errors', 'On');

include_once "datamanager.php";

$networkid = $_POST['network'];

$datamanager = new DataManager();

echo $datamanager->getSelector($datamanager->getSensorsInNetwork($networkid),TRUE,"sensorList");

?>