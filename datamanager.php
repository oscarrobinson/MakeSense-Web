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

    public function addSensor($sensorId, $netId, $sensorOnt){
        $sql_add = "INSERT INTO sensors(sensor_id, network_id, ontology_id) VALUES(\'".$sensorId."\',\'".$netId."\',\'".$sensorOnt."\')"
        $stmt = $this->conn->query($sql_add);
        $data = $stmt->fetchAll();
        return;
    }
}
?>
