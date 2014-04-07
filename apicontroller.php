<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";


$dataManager = new DataManager();

$requestCode = $_POST['requestCode'];

if ($requestCode=="1"){
	$sensorId = $_POST['sensorId'];
	$netId = $_POST['netId'];
	$sensorOnt = $_POST['sensorOnt'];
	$sensorName = $_POST['sensorName'];
	$sensorDescription = $_POST['sensorDescription'];
	echo "$sensorName $sensorDescription";
	$dataManager->addSensor($sensorId, $netId, $sensorOnt, $sensorName, $sensorDescription);
}


echo "This page is working :)<br></br>";

?>