<?php
include_once "datamanager.php";

$sensorId = $_POST['sensorId'];
$netId = $_POST['netId'];
$sensorOnt = $_POST['sensorOnt'];

$dataManager = new DataManager();
$dataManager->addSensor($sensorId, $netId, $sensorOnt);

?>