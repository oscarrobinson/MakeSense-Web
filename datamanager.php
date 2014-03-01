<?php
ini_set('display_errors', 'On');
class DataManager
{
    private $host;
    private $user;
    private $passwd;
    private $db;
    private $conn;

 
    public function __construct(){
        $this->host="eu-cdbr-azure-west-b.cloudapp.net";
        $this->user="bd4f86da652db2";
        $this->passwd="95905cbf";
        $this->db="methtesA9fvknZn4";
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
        $sql_select = "SELECT DISTINCT id FROM multiple_sensors";
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

        $sql_select = "SELECT * FROM multiple_sensors WHERE id='".$id."'";
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
}
?>
