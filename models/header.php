<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/
echo "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>Sensor Networks</title>
<link href='".$template."' rel='stylesheet' type='text/css' />
<link href='bootstrap/dist/css/bootstrap.css' rel='stylesheet'>";

if (stripos($_SERVER['REQUEST_URI'], 'contact.php')){
     echo "<link href='bootstrap/examples/carousel/carousel.css' rel='stylesheet'>";
}

echo"
<link href='bootstrap/examples/carousel/carousel.css' rel='stylesheet'>
<link rel='shortcut icon' href='bootstrap/assets/ico/favicon.png'>
<link href='http://fonts.googleapis.com/css?family=Chivo:400,900' rel='stylesheet' type='text/css'>
<script src='models/funcs.js' type='text/javascript'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js'></script>
<script src='http://code.highcharts.com/highcharts.js'></script>
<script src='bootstrap/dist/js/bootstrap.min.js'></script>
</head>";

?>