<?php
ini_set('display_errors', 'On');
include_once "datamanager.php";

$dataManager = new DataManager();

$requestId = $_POST['requestId'];

if($requestId == 1){

	$netId = $_POST['networkId'];

	$ontId = $_POST['ontologyId'];

	$sensorIds = $_POST['sensorIdList'];

	$networkInfoArray = $dataManager->getNetwork($netId);
	if (count($networkInfoArray)>0){
		$networkInfoArray = $networkInfoArray[0];
	}

	$ontologyInfoArray = $dataManager->getOntology($ontId);
	if (count($ontologyInfoArray) > 0){
		$ontologyInfoArray = $ontologyInfoArray[0];
	}

	$sensorSelector = $dataManager->getSelector($sensorIds, False, "sensorInfoSelector");



	//Indexes: 0 - Network Id,  1 - Network Name, 2 - Network Description, 3 - ontology id, 4 - ontology name, 5 - ontology description, 6 - sensor selector
	$returnArray = array($networkInfoArray[1], $networkInfoArray[2], $networkInfoArray[3], $ontologyInfoArray[0], $ontologyInfoArray[1],$ontologyInfoArray[2], $sensorSelector);

	echo json_encode($returnArray);
}

else if ($requestId == 2){
	$sensorId = $_POST['sensorId'];

	$sensorInfo = $dataManager->getSensor($sensorId[0]);
	if (count($sensorInfo) > 0){
		$sensorInfo = $sensorInfo[0];
	}

	$returnArray = array($sensorInfo[1], $sensorInfo[2]);

	echo json_encode($returnArray);
}

else if ($requestId == 3){
	$newNetworkName = $_POST['newNetName'];
	$networkId = $_POST['netId'];
	$dataManager->setNetworkName($newNetworkName, $networkId);
}

else if ($requestId == 4){
	$newNetworkDescription= $_POST['newNetDescription'];
	$networkId = $_POST['netId'];
	$dataManager->setNetworkDescription($newNetworkDescription, $networkId);
}

else if ($requestId == 5){
	$sensorId = $_POST['sensorId'];
	$newSensorName = $_POST['newSensorName'];
	$dataManager->setSensorName($newSensorName, $sensorId);
}

else if ($requestId == 6){
	$sensorId = $_POST['sensorId'];
	$newSensorDescription = $_POST['newSensorDesc'];
	$dataManager->setSensorDescription($newSensorDescription, $sensorId);

}


?>