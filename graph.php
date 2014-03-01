<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
require_once("navigation.php");
//Links for permission level 2 (default admin)
if (!($loggedInUser->checkPermission(array(2)))){
echo "
<body>
<div id='wrap'>
	<div id='networkadd1'>
		<div id='networkadd'>
			<p>Add a network! Give it a name and type in your unique identifier number to link to it</p>
			<form action='#'>
				Network Name: <input type='text' name='networkname'><br>
				Unique Identifier: <input type='text' name='uniqueid'><br>
			<input type='submit' value='Submit'>
		</div>
	</div>
	<hr>
	
	<div id='content'>
		<h2>$loggedInUser->displayname's Sensor Network</h2>
		<br>
	</div>";
	if (!($loggedInUser->checkPermission(array(2)))){
	echo "
	<div id='main'>
		<div id='dataList'>
			<div id='graph'></div>
				<div id='controls'>
					<div id='autoUpdate'>
						<form>
							<input type='checkbox' id='isAutoUpdateOn''>Auto Update</input>
						</form>
					</div>
					<div id='refreshButton'><button type='button'>Refresh Graph</button>
					</div>
				</div>
				<div id='dataList'>
				</div>
			</div>
		</div>";
		}

		/*<div>
			<a href='#' class='networkbutton'>Continue</a>
		</div>*/
		
		echo"
		</form>
	</div>
</div>";
require_once("footer.php");
echo"
</body>";
}
//Links for permission level 2 (default admin)
	if (!($loggedInUser->checkPermission(array(2)))){
	echo "
<script type='text/javascript'>
    var autoUpdate = false;
    var autoUpdateJustOff = false; //used to prevent autoupdate occuring one last time after it is turned off
    $(document).ready(function()
    {
      //refreshDataList();
      loadGraph();
    });

    $('#refreshButton').click(function() {
        loadGraph();
    });

    $('#isAutoUpdateOn').click(function() {
        if($('#isAutoUpdateOn').is(':checked')){
           autoUpdate = true;  // checked
           loadGraph();
        }
        else{
            autoUpdate = false;  // unchecked
            autoUpdateJustOff = true;
        }
    });

    /*function refreshDataList()
    {
        $('#dataList').load('datalist.php', function(){
           setTimeout(refreshDataList, 3000);
        });
    }*/

    function loadGraph()
    {
        if (!autoUpdateJustOff){
            console.log('loaded graph');
            $('#graph').load('graphdata.php', function(){
                if (autoUpdate==true){
                    setTimeout(loadGraph, 3000);
                }
            });
        }
        else{
            autoUpdateJustOff = false;
        }

    }
</script>
</div>
</div>
</body>
</html>";
}

?>