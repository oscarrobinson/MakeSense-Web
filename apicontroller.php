<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";

//ERROR CODES
$duplicateEntryError = 23000;
$userValidCode = 1000;
$userInvalidCode = 1001;


$dataManager = new DataManager();

$requestCode = $_POST['requestCode'];

if ($requestCode=="1"){
	$username = $_POST['username'];
	$id = $_POST['apiId'];
	$userValid = $dataManager->validateApiUser($username, $id);
	if ($userValid){
		echo $userValidCode;
	}
	else{
		echo $userInvalidCode;
	}
}

if ($requestCode=="10"){
	$sensorId = $_POST['sensorId'];
	$netId = $_POST['netId'];
	$sensorOnt = $_POST['sensorOnt'];
	$sensorName = $_POST['sensorName'];
	$sensorDescription = $_POST['sensorDescription'];
	try {$dataManager->addSensor($sensorId, $netId, $sensorOnt, $sensorName, $sensorDescription);}
	catch(PDOException $e){
		if ($e->errorInfo[0]=="23000"){
			echo $duplicateEntryError;
		}
	}
}
?>