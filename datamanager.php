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

        $sql_select = "SELECT * FROM ".$this->dataTable." WHERE id='".$id."'";
        $stmt = $this->conn->query($sql_select);
        $data = $stmt->fetchAll();
        $returnArray = array(); 
        foreach($data as $row)
        {
            $dataRow = array();
            $dataRow[]=($row['timestamp']);
            $dataRow[]=$row['data'];
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

    public function getSelector($selectArray){
        $html = "<select class=\"form-control\">";
        foreach($selectArray as $item){
            $html = $html."<option value=\"".$item."\">".$item."</option>";
        }
        $html = $html."</select>";
        return $html;


    }
}
?>
