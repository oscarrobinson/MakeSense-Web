<?php
include_once "datamanager.php";
/*
$sensorId = $_POST['sensorId'];
$netId = $_POST['netId'];
$sensorOnt = $_POST['sensorOnt'];*/
$netId = $_POST['netId'];

$dataManager = new DataManager();
//$dataManager->addSensor($sensorId, $netId, $sensorOnt);
$thing = $dataManager->getSensorsInNetwork($netId);
echo $thing;

?>