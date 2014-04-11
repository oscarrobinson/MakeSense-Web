<?php
ini_set('display_errors', 'On');
class DataManager
{
    private $host;
    private $user;
    private $passwd;
    private $db;
    private $conn;
    private $dataTable = "sensor_data";
    private $sensorTable = "sensors";
    private $rawDataTable = "data";
    private $networksTable = "networks";
 
    public function __construct(){
        $this->host="eu-cdbr-azure-north-b.cloudapp.net";
        $this->user="b56834bde0c85e";
        $this->passwd="87a230d7";
        $this->db="makesensemain";
        $this->connectToDatabase();
    }

    private function connectToDatabase()
    {
        try 
        {
            $this->conn = new PDO( "mysql:host=$this->host;dbname=$this->db", $this->user, $this->passwd);
            $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        }
        catch(Exception $e){
            die(var_dump($e));
        }


    }

    //get's the list of sensor ids in the table
    public function getIdList()
    {
        $sql_select = "SELECT DISTINCT id FROM ".$this->dataTable;
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        $result = array();
        foreach($data as $id){
            $result[] = $id[0];
        }
        return $result;
    }

    //gets an array of all the data for a sensor with a given id
    public function getDataList($id)
    {

        $sql_select = "SELECT reading, timestamp FROM ".$this->rawDataTable." WHERE sensor_id='".$id."'";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        $returnArray = array(); 
        foreach($data as $row)
        {
            $dataRow = array();
            $dataRow[]=($row['timestamp']);
            $dataRow[]=($row['reading']);
            array_push($returnArray, $dataRow);
        }
        return $returnArray;
    }

    //gets array of all sensor node ids for a given network id
    public function getSensorsForNetwork($networkId){
       $sql_select = "SELECT id FROM ".$this->dataTable." WHERE networkid='".$networkId."'";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        $returnArray = array(); 
        foreach($data as $row)
        {          
            if (!in_array($row[0], $returnArray)){
                array_push($returnArray, $row[0]);
            }
        }
        return $returnArray;
    }

    public function getNetworksForAccount($accountId){
        $sql_select = "SELECT network_id FROM networks WHERE id='".$accountId."'";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        $returnArray = array();
        foreach($data as $row)
        {
            array_push($returnArray, $row[0]);
        }
        return $returnArray;

    }


    public function getSelector($selectArray, $isMultiple, $id){
        $html = "";
        if(!$isMultiple){
            $html = "<select id=\"$id\" class=\"form-control\">";
        }
        else
        {
            $html = "<select multiple id=\"$id\" class=\"form-control\">";
        }
        $counter=0;
        foreach($selectArray as $item){
            if ($counter==0){
                $html = $html."<option selected value=\"".$item."\">".$item."</option>";
            }
            else{
                $html = $html."<option value=\"".$item."\">".$item."</option>";
            }
            $counter+=1;
        }
        $html = $html."</select>";
        return $html;


    }

    public function getOntologySelector($selectArray, $isMultiple, $id){
        $html = "";
        if(!$isMultiple){
            $html = "<select id=\"$id\" class=\"form-control\">";
        }
        else
        {
            $html = "<select multiple id=\"$id\" class=\"form-control\">";
        }
        $counter = 0;
        foreach($selectArray as $item){
            if ($counter==0){
                $html = $html."<option selected value=\"".$item[0]."\">".$item[1]."</option>";
            }
            else{
                $html = $html."<option value=\"".$item[0]."\">".$item[1]."</option>";
            }
            $counter+=1;
        }
        $html = $html."</select>";
        return $html;

    }


    public function getSensorsInNetwork($networkId){
        $sql_select = "SELECT sensor_id FROM sensors WHERE network_id='".$networkId."'";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        $returnArray = array();
        foreach($data as $row)
        {
            array_push($returnArray, $row[0]);
        }
        return $returnArray;
    }

    public function getOntologyForSensor($sensorId){
        $sql_select = "SELECT ontology_id FROM sensors WHERE sensor_id='".$sensorId."'";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        $sql_select = "SELECT ontology_id, ontology_name, ontology_description, ontology_axis FROM ontologies WHERE ontology_id='".$data[0][0]."'";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        return $data[0];

    }


    public function getSensorsInNetworkWithOntology($networkId,$ontologyId){
        $sql_select = "SELECT sensor_id FROM sensors WHERE network_id='".$networkId."' AND ontology_id='".$ontologyId."'";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        $returnArray = array();
        foreach($data as $row)
        {
            array_push($returnArray, $row[0]);
        }
        return $returnArray;
    }

    public function getOntologiesInNetwork($networkId){
        $sql_select= "SELECT ont.ontology_id, ontologies.ontology_name FROM (SELECT DISTINCT ontology_id FROM sensors WHERE network_id='$networkId') AS ont INNER JOIN ontologies ON ont.ontology_id = ontologies.ontology_id";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        return $data;
    }

    public function addSensor($sensorId, $netId, $sensorOnt, $sensorName, $sensorDescription){
        if ($sensorName=="" and $sensorDescription==""){
            $stmt = $this->conn->prepare("INSERT INTO sensors(sensor_id, network_id, ontology_id) VALUES(:sensorId, :netId, :sensorOnt)");
            $stmt->execute(array(':sensorId' => $sensorId, ':netId' => $netId, ':sensorOnt' => $sensorOnt));

        }
        else if($sensorName!="" and $sensorDescription==""){
            $stmt = $this->conn->prepare("INSERT INTO sensors(sensor_id, sensor_name, network_id, ontology_id) VALUES(:sensorId, :sensorName, :netId, :sensorOnt)");
            $stmt->execute(array(':sensorId' => $sensorId, ':sensorName' => $sensorName, ':netId' => $netId, ':sensorOnt' => $sensorOnt));          
        }
        else if($sensorName=="" and $sensorDescription!=""){
            $stmt = $this->conn->prepare("INSERT INTO sensors(sensor_id, sensor_description, network_id, ontology_id) VALUES( :sensorId, :sensorDescription, :netId, :sensorOnt)");
            $stmt->execute(array(':sensorId' => $sensorId, ':sensorDescription' => $sensorDescription,':netId' => $netId, ':sensorOnt' => $sensorOnt));              
        }
        else{
            $stmt = $this->conn->prepare("INSERT INTO sensors(sensor_id, sensor_name, sensor_description, network_id, ontology_id) VALUES(:sensorId, :sensorName, :sensorDescription, :netId, :sensorOnt)");
            $stmt->execute(array(':sensorId' => $sensorId, ':sensorName' => $sensorName, ':sensorDescription' => $sensorDescription,':netId' => $netId, ':sensorOnt' => $sensorOnt));   
        }
        return;
    }

    public function validateApiUser($username, $id){
        $stmt = $this->conn->prepare("SELECT * FROM uc_users WHERE user_name=:username AND id=:id");
        $stmt->execute(array(':username' => $username, ':id' => $id));
        $data = $stmt->fetchAll();
        if(count($data)==0){
            return false;
        }
        else{
            return true;
        }
    }

    public function addReading($sensorId, $reading, $timestamp){
        $stmt = $this->conn->prepare("INSERT INTO data(sensor_id, timestamp, reading) VALUES(:sensorId, :timestamp, :reading)");
        $stmt->execute(array(':sensorId' => $sensorId, ':timestamp' => $timestamp, ':reading' => $reading));

        return;
    }

    public function addOntology($name, $description, $axis){
        //test if ontology exsits, if so, get its id
        $stmt = $this->conn->prepare("SELECT ontology_id FROM ontologies WHERE ontology_name=:name AND ontology_description=:description AND ontology_axis=:axis");
        $stmt->execute(array(':name' => $name, ':description' => $description, ':axis' => $axis));
        $data = $stmt->fetchAll();
        if (!empty($data[0])){
            return $data[0][0];
        }
        else{
            $stmt = $this->conn->prepare("INSERT INTO ontologies(ontology_name, ontology_description, ontology_axis) VALUES (:name, :description, :axis)");
            $stmt->execute(array(':name' => $name, ':description' => $description, ':axis' => $axis));
            $stmt = $this->conn->prepare("SELECT ontology_id FROM ontologies WHERE ontology_name=:name AND ontology_description=:description AND ontology_axis=:axis");
            $stmt->execute(array(':name' => $name, ':description' => $description, ':axis' => $axis));
            $data = $stmt->fetchAll();
            return $data[0][0];
        }
    }

    public function addNetwork($id, $netId, $name, $description){
        if ($name=="" and $description==""){
            $stmt = $this->conn->prepare("INSERT INTO networks(id, network_id) VALUES(:id, :netId)");
            $stmt->execute(array(':id' => $id, ':netId' => $netId));
        }
        else if($name!="" and $description==""){
            $stmt = $this->conn->prepare("INSERT INTO networks(id, network_id, network_name) VALUES(:id, :netId, :name)");
            $stmt->execute(array(':id' => $id, ':netId' => $netId, ':name' => $name));         
        }
        else if($name=="" and $description!=""){
            $stmt = $this->conn->prepare("INSERT INTO networks(id, network_id, network_description) VALUES(:id, :netId, :description)");
            $stmt->execute(array(':id' => $id, ':netId' => $netId, ':description' => $description));           
        }
        else{
            $stmt = $this->conn->prepare("INSERT INTO networks(id, network_id, network_name, network_description) VALUES(:id, :netId, :name, :description)");
            $stmt->execute(array(':id' => $id, ':netId' => $netId, ':name' => $name, ':description' => $description));  
        }
        return;
    }
}
?>
