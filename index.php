<!DOCTYPE HTML>
<html>
<head>
<title>Meth Test 1</title>
</head>
<body>
<?php 
ini_set('display_errors', 'On');
include_once "model.php"; 
include_once "controller.php";
include_once "view.php";

$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
echo $view->output();
?>
</body>
</html>