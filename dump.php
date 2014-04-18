<?php
 
$host = "eu-cdbr-azure-north-b.cloudapp.net";
$db = "makesensemain";
$user = "b56834bde0c85e";
$pass = "87a230d7";

// Connect to the database
$link = mysql_connect($host, $user, $pass);
mysql_select_db($db);
 

$query = "
SELECT networks.network_id, networks.network_name, sensors.sensor_name, data.timestamp, data.reading
FROM networks, sensors, data
WHERE networks.network_id = sensors.network_id
AND sensors.sensor_id = data.sensor_id
";

$csv_fileName = 'MakeSense_Export_'.date('Y-m-d').'.csv';
$result = mysql_query($query) or die("Error executing query: ".mysql_error());
$row = mysql_fetch_assoc($result);
$line = "";
$comma = "";
foreach($row as $name => $value)
{
    $line .= $comma . '"' . str_replace('"', '""', $name) . '"';
    $comma = ";";
}
$line .= "\n";
$out = $line;
 
mysql_data_seek($result, 0);
 
while($row = mysql_fetch_assoc($result))
{
    $line = "";
    $comma = "";
    foreach($row as $value)
    {
        $line .= $comma . '"' . str_replace('"', '""', $value) . '"';
        $comma = ";";
    }
    $line .= "\n";
    $out.=$line;
}
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=".$csv_fileName."");

echo $out;
exit;

?>


