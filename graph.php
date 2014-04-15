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
	<div id='addNetwork'>
		<div id='networkadd'>
			<p>Add a network! Give it a name and type in your unique identifier number to link to it</p>
			<form action='#'>
				Network Name: <input type='text' name='networkname' id='networkName'><br>
				Network Identifier: <input type='text' name='uniqueid' id='networkId'><br>
			<input id='submitNetwork' type='submit' value='Submit'>
      <div id='networkErrorMessages' style='color:red'></div>
		</div>

	</div>
	
	<div class='pleasedontfloat'>
	</div>

  <div id='allControls'>
	<div id='networkselect'>
		Select Network: ".$datamanager->getSelectorNew($datamanager->getNetworksForAccount($loggedInUser->user_id),FALSE,"networkList")."
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
  				sensors.push([$(selected).val(),$(selected).text()]);
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

    $('#submitNetwork').click(function(e){
      document.getElementById('networkErrorMessages').innerHTML = '';
      console.log('ronkers');
      var networkIdText = $('#networkId').val();
      var networkNameText = $('#networkName').val();
      if(networkIdText===\"\" || networkNameText===\"\"){
        document.getElementById('networkErrorMessages').innerHTML = '<br>No text entered for network name or unique identifier</br>';
      }
      else{
        $.ajax({
          url: 'apicontroller.php',
          type: 'post',
          datatype: 'string',
          data: {username: '".$loggedInUser->username."', id:'".$loggedInUser->user_id."', requestCode: '40', name:networkNameText, netId:networkIdText, description:''},
          success:function(data){
            console.log(data);
            if(data===\"23000\"){
                document.getElementById('networkErrorMessages').innerHTML = '<br>Network with id '+networkIdText+' already exists on your account</br>';
            }

          }
        });
      }
    });

    
    var selectedNetwork = \"\";

    $( \"#networkList\" ).change(function () {
      console.log('Network select change');
    	var str = \"\";
   		$( \"#networkList option:selected\" ).each(function() {
    		str += $( this ).val() + \" \";
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
                var ont = '';
                ont += getOntologySelected();
                console.log(ont);
                $.ajax({
                  url: 'sensorlist.php',
                  type: 'post',
                  data: { ontology: ont, network: str},
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