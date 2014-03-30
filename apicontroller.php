<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";

$sensorId = $_POST['sensorId'];
$netId = $_POST['netId'];
$sensorOnt = $_POST['sensorOnt'];
echo "This page is working :)<br></br>";
echo $sensorId;

$dataManager = new DataManager();
$dataManager->addSensor($sensorId, $netId, $sensorOnt);

?>