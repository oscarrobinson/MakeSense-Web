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


  <div class='container'>
  
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

  <div id='selectedInfo'>
  <table>
  <tr><td><h4>Network Name:</h4></td><td><div id='networkNameText'></div><div id='networkNameEdit'></div></td><td><h4>Network Id:</h4></td><td><div id='networkIdText'></div></td><td><h4>Network Description:</h4></td><td><div id='networkDescriptionText'></td></tr>
  <tr><td><h4>Ontology Name:</h4></td><td><div id='ontologyNameText'></div></td><td><h4>Ontology Id:</h4></td><td><div id='ontologyIdText'></div></td><td><h4>Ontology Description:</h4></td><td><div id='ontologyDescriptionText'></div></td></tr>
  <tr><td><h4>Sensor Id:</h4></td><td><div id='sensorIdSelector'></div></td><td><h4>Sensor Name:</h4></td><td><div id='sensorNameText'></div></td><td><h4>Sensor Description:</h4></td><td><div id='sensorDescriptionText'></div></td></tr>
  </table>

  </div>
	
	<div class='clearfix'>
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

    function updateSensorInfo()
    {
      var sensorId = [];
      $('#sensorIdSelector option:selected').each(function(i,selected){
        sensorId.push($(selected).val());
      });
      console.log('SENSOR SELECTED: '+sensorId);
      $.ajax({
        url:'sensorinfocontroller.php',
        type:'post',
        datatype:'string',
        data: {requestId: '2', sensorId: sensorId},
        success:function(data){
          console.log('DATA RECEIVED: ' + data);
          var result = eval(data);
          document.getElementById('sensorNameText').innerHTML = result[0];
          document.getElementById('sensorDescriptionText').innerHTML = result[1];

        }
      });
    }

    $( '#sensorIdSelector' ).change(function () {
      updateSensorInfo();
    }).change();

    function loadInfo()
    {
      var netId = getNetworkSelected()[0];
      var ontId = getOntologySelected()[0];
      var sensorIds = [];
      $(\"#sensorList option:selected\").each(function(i, selected){ 
          sensorIds.push($(selected).val());
        });
      $.ajax({
        url:'sensorinfocontroller.php',
        type: 'post',
        datatype: 'string',
        data: {requestId: '1', networkId: netId, ontologyId: ontId, sensorIdList: sensorIds},
        success:function(data){
          console.log(data);
          var result = eval(data);
          console.log(result);
          document.getElementById('networkIdText').innerHTML = result[0];
          document.getElementById('networkNameText').innerHTML = result[1];
          document.getElementById('networkDescriptionText').innerHTML = result[2];
          document.getElementById('ontologyIdText').innerHTML = result[3];
          document.getElementById('ontologyNameText').innerHTML = result[4];
          document.getElementById('ontologyDescriptionText').innerHTML = result[5];
          document.getElementById('sensorIdSelector').innerHTML = result[6];
          updateSensorInfo();
        }
      });
      
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
                      loadInfo();
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
                loadInfo();
                loadGraph();
            }
        });
    }).change();


	$( '#sensorselectlist' ).change(function () {
      loadInfo();
    	loadGraph();
  	}).change();
</script>

</div>
</div>
</body>
</html>";
}

?>