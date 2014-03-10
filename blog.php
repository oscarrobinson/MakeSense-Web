
<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
require_once("navigation.php");

echo "
<html>
<head>
</head>
<body>
	<div id='wrap'>
		<div id='articleBody clear'>
			<iframe id='blogiframe' src='http://uclmethdetector.wordpress.com/' frameborder='0' allowfullscreen></iframe>
		</div>
	</div>";

	
require_once("footer.php");
echo"
</body>
</html>";

?>
