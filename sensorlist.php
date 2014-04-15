<?php
ini_set('display_errors', 'On');

include_once "datamanager.php";

$networkid = $_POST['network'];
$ontology = $_POST['ontology'];

$datamanager = new DataManager();

if ($ontology!=""){
	echo $datamanager->getSelectorNew($datamanager->getSensorsInNetworkWithOntology($networkid,$ontology),TRUE,"sensorList");
}
else{
	echo "<b>No Sensors Found</b>";
}

?>