<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

//Database Information
/**********For Azure Login**************/
$db_host = "ec2-54-72-150-160.eu-west-1.compute.amazonaws.com"; //Host address (most likely localhost)
$db_name = "makesense_main"; //Name of Database
$db_user = "makesense"; //Name of database user
$db_pass = "this_is_R0NKERS"; //Password for database user 

/**********For Localhost Login**********
$db_host = "localhost"; //Host address (most likely localhost)
$db_name = "usercakedb"; //Name of Database
$db_user = "grex"; //Name of database user
$db_pass = "moop"; //Password for database user */

$db_table_prefix = "uc_";

GLOBAL $errors;
GLOBAL $successes;

$errors = array();
$successes = array();

/* Create a new mysqli object with database connection parameters */
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
GLOBAL $mysqli;

if(mysqli_connect_errno()) {
	echo "Connection Failed: " . mysqli_connect_errno();
	exit();
}

//Direct to install directory, if it exists
if(is_dir("install/"))
{
	header("Location: install/");
	die();

}

?>