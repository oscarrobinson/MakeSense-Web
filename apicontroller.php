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
$addSensorCode = "10";
$addReadingCode = "20";
$addOntologyCode = "30";
$addNetworkCode = "40";


$dataManager = new DataManager();

$requestCode = $_POST['requestCode'];

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

else if ($requestCode==$addSensorCode){
	$username = $_POST['username'];
	$id = $_POST['id'];
	$userValid = $dataManager->validateApiUser($username, $id);

	if ($userValid){
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
	else{
		echo $userInvalidCode;
	}
}

else if ($requestCode==$addReadingCode){
	$username = $_POST['username'];
	$id = $_POST['id'];
	$userValid = $dataManager->validateApiUser($username, $id);
	if ($userValid){
		$sensorId = $_POST['sensorId'];
		$timestamp = $_POST['timestamp'];
		$reading = $_POST['reading'];
		try {$dataManager->addReading($sensorId, $reading, $timestamp);}
		catch(PDOException $e){
			if ($e->errorInfo[0]=="23000"){
				echo $duplicateEntryError;
			}
		}
	}
	else{
		echo $userInvalidCode;
	}
}

else if ($requestCode==$addOntologyCode){
	$username = $_POST['username'];
	$id = $_POST['id'];
	$userValid = $dataManager->validateApiUser($username, $id);
	if ($userValid){
		$name = $_POST['name'];
		$description = $_POST['description'];
		$axis = $_POST['axis'];
		$ontologyCode = $dataManager->addOntology($name, $description, $axis);
		echo $ontologyCode;
	}
	else{
		echo $userInvalidCode;
	}
}

else if ($requestCode==$addNetworkCode){
	$username = $_POST['username'];
	$id = $_POST['id'];
	$userValid = $dataManager->validateApiUser($username, $id);
	if ($userValid){
		$netId = $_POST['netId'];
		$name = $_POST['name'];
		$description = $_POST['description'];
		try {$dataManager->addNetwork($id, $netId, $name, $description);}
		catch(PDOException $e){
			if ($e->errorInfo[0]=="23000"){
				echo $duplicateEntryError;
			}
		}
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