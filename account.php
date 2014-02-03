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
<body>
    
<div id='wrap'>
	<div class='container'>
		<div id='title'>
			<h1>Customisable Sensor Networks</h1>
		</div>
		<h2>Account</h2>
		<div id='main'>
			<br><br>
			Hey, $loggedInUser->displayname, or should I say $loggedInUser->title. You registered this account on " . date("M d, Y", $loggedInUser->signupTimeStamp()) . ".
		</div>
	</div>
</div>";
require_once("footer.php");
echo"
</body>
</html>";

?>
