<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";


//ERROR CODES
$duplicateEntryError = 23000;
$userValidCode = 1000;
$userInvalidCode = 1001;
$badRequest = 0;

//REQUEST CODES
$authenticationCode = "1";
$getSensorNetworkData = "10";



$dataManager = new DataManager();

echo $_POST['username'];


$requestCode = $_POST['request'];

if ($requestCode==$authenticationCode){
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

else if ($requestCode==$getSensorNetworkData){
	$username = $_POST['username'];
	$id = $_POST['id'];
	$userValid = $dataManager->validateApiUser($username, $id);

	if ($userValid){
		$netId = $_POST['netId'];
		$sensorData = array();
		try {
			$sensorIds = $dataManager->getSensorsInNetwork($netId);
			$sensorData = $dataManager->getReadingsForSensors($sensorIds);
		}
		catch(PDOException $e){
			echo $badRequest;
		}
		echo json_encode($sensorData);
	}
	else{
		echo $userInvalidCode;
	}
}



else
{
	echo $badRequest;
}
?>