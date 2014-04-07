<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";


$dataManager = new DataManager();

$requestCode = $_POST['requestCode'];

if ($requestCode=="1"){
	$sensorId = $_POST['sensorId'];
	$netId = $_POST['netId'];
	$sensorOnt = $_POST['sensorOnt'];
	$dataManager->addSensor($sensorId, $netId, $sensorOnt);
	echo $sensorId;
}


echo "This page is working :)<br></br>";

?>