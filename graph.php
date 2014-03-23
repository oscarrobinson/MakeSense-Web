<?php
/*
UserCake Version: 2.0.2
http://usercake.com
*/

require_once("models/config.php");
if (!securePage($_SERVER['PHP_SELF'])){die();}
require_once("models/header.php");
require_once("navigation.php");
require_once("datamanager.php");
$datamanager = new DataManager();
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

  <div id='allControls'>
	<div id='networkselect'>
		Select Network: ".$datamanager->getSelector($datamanager->getNetworksForAccount($loggedInUser->user_id),FALSE,"networkList")."
	</div>
  <div id='ontologyselect'>
    Select Sensor Type:
    <div id='ontologyselectlist'>

    </div>
  </div>
	<div id='sensorselect'>
		Select Sensor:
		<div id='sensorselectlist'>

		</div>
	</div>";
	if (!($loggedInUser->checkPermission(array(2)))){
	echo "
				<div id='controls'>
					<div id='autoUpdate'>
						<form>
							<input type='checkbox' id='isAutoUpdateOn''>Auto Update</input>
						</form>
					</div>
					<div id='refreshButton'><button type='button'>Refresh Graph</button>
					</div>
				</div>
        </div>
				<div id='graph'>
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
    var timeout;

    $('#refreshButton').click(function() {
        loadGraph();
    });

    $('#isAutoUpdateOn').click(function() {
        if($('#isAutoUpdateOn').is(':checked')){
           loadGraph();
           autoUpdate = true;  // checked
		   timeout = setTimeout(loadGraph,3000);
        }
        else{
            autoUpdate = false;  // unchecked
            autoUpdateJustOff = true;
            clearTimeout(timeout);
        }
    });

    function getNetworkSelected(){
      var network = []
      $(\"#networkList option:selected\").each(function(i, selected){ 
          network[i] = $(selected).val(); 
      });
      return network;  
    }

    function getOntologySelected()
    {
      var ontology = []
      $(\"#ontologyselectlist option:selected\").each(function(i, selected){ 
          ontology[i] = $(selected).val(); 
      });
      return ontology;  
    }


    function loadGraph()
    {
        console.log('loadGraph() called');
        if (!autoUpdateJustOff){
    		var sensors = [];
    		$(\"#sensorList option:selected\").each(function(i, selected){ 
  				sensors[i] = $(selected).text(); 
			   });
        	$.ajax({
          	  url: 'graphdata.php',
          	  type: 'post',
         	  data: { sensorArray: sensors },
          	  success:function(data){
                $('#graph').html(data);
            }
        	});
			if(autoUpdate){
				//console.log('setting timeout');
				timeout = setTimeout(loadGraph,3000);
			}
			
        }
        else{
            autoUpdateJustOff = false;
        }

    }

    
    var selectedNetwork = \"\";

    $( \"#networkList\" ).change(function () {
      console.log('Network select change');
    	var str = \"\";
   		$( \"#networkList option:selected\" ).each(function() {
    		str += $( this ).text() + \" \";
        selectedNetwork = str;
    	});
        $.ajax({
            url: 'ontologylist.php',
            type: 'post',
            datatype: 'string',
            data: { network: str },
            success:function(data){
                $('#ontologyselectlist').html(data);
                $('#ontologyselectlist').prop('selectedIndex',0);
                console.log('In Ontology List generation Ajax:'+getOntologySelected());
                $.ajax({
                  url: 'sensorlist.php',
                  type: 'post',
                  data: { ontology: getOntologySelected()[0], network: str},
                  success:function(data){
                      $('#sensorselectlist').html(data);
                      loadGraph();
                  }

                });
            }
        });
  	}).change();

    

    $( '#ontologyselectlist' ).change(function () {
      console.log('Ontology select change');
      var str = \"\";
      $( \"#ontologyList option:selected\" ).each(function() {
        str += $( this ).val() + \" \";
      });
        $.ajax({
            url: 'sensorlist.php',
            type: 'post',
            data: { ontology: str, network: getNetworkSelected()[0] },
            success:function(data){
                $('#sensorselectlist').html(data);
                loadGraph();
            }
        });
    }).change();


	$( '#sensorselectlist' ).change(function () {
    	loadGraph();
  	}).change();
</script>

</div>
</div>
</body>
</html>";
}

?>