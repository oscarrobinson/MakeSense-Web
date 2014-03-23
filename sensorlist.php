<?php
ini_set('display_errors', 'On');

include_once "datamanager.php";

$networkid = $_POST['network'];
$ontology = $_POST['ontology'];

$datamanager = new DataManager();
echo $datamanager->getSelector($datamanager->getSensorsInNetworkWithOntology($networkid,$ontology),TRUE,"sensorList");

?>