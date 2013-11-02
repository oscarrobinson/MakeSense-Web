<?php
ini_set('display_errors', 'On');
class Model
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

    public function getRandomStrings()
    {

        $sql_select = "SELECT * FROM randomdata";
        $stmt = $this->conn->query($sql_select);
        $strings = $stmt->fetchAll();
        $returnArray = array(); 
        foreach($strings as $string)
        {
            array_push($returnArray,$string['randomString']);
        }
        return $returnArray;
    }
}
?>
