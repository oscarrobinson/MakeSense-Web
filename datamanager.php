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

    public function getDataList()
    {

        $sql_select = "SELECT * FROM lightsensor";
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

    public function graphStringFromDataArray($dataString){
        $output = "[";
        foreach($dataString as $row)
        {
            $output = $output."[";
            $i = 0;
            foreach($row as $element){
                if ($i==0){
                    $element=intval(floatval($element)*1000);
                }
                $output = $output.$element.",";
                $i+=1;
            }
            $output = rtrim($output, ",");
            $output = $output."],";
        }
        $output = rtrim($output, ",");
        $output = $output."]";
        return $output;
    }

}
?>
