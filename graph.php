<?php
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
	<div class='content'>
		<div class='background block_1'>
			<div id = 'testcenter'>
				
				<div id='graph'>
				</div>
				
				
				<div id='selectedInfo'>
					<div class='panel-group' id='accordion'>
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<h4 class='panel-title'>
								<a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'>
									Network Information
								</a>
								</h4>
							</div>
							<div id='collapseOne' class='panel-collapse collapse in'>
								<div class='panel-body'>
									<table>
										<tr><td><b>Network Name:</b></td><td><b>Network Id:</b></td><td><b>Network Description:</b></td></tr>
										<tr><td><div id='networkNameText'></div><div id='networkNameEdit'><button type='button' class='btn btn-default' data-toggle='modal' data-target='#networkNameEditModal'>Edit</button></div></td><td><div id='networkIdText'></div></td><td><div id='networkDescriptionText'></div><div id='networkDescriptionEdit'><button type='button' class='btn btn-default' data-toggle='modal' data-target='#networkDescriptionEditModal'>Edit</button></div></td></tr>
									</table>
								</div>
							</div>
						</div>
						
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<h4 class='panel-title'>
									<a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'>
										Ontology Information
									</a>
								</h4>
							</div>
							<div id='collapseTwo' class='panel-collapse collapse'>
								<div class='panel-body'>
									<table>
										<tr><td><b>Ontology Name:</b></td><td><b>Ontology Id:</b></td><td><b>Ontology Description:</b></td></tr>
										<tr><td><div id='ontologyNameText'></div></td><td><div id='ontologyIdText'></div></td><td><div id='ontologyDescriptionText'></div></td></tr>
									</table>      
								</div>
							</div>
						</div>
						<div class='panel panel-default'>
							<div class='panel-heading'>
								<h4 class='panel-title'>
									<a data-toggle='collapse' data-parent='#accordion' href='#collapseThree'>
										Sensor Information
									</a>
								</h4>
							</div>
							<div id='collapseThree' class='panel-collapse collapse'>
								<div class='panel-body'>
									<table>
										<tr><td><b>Sensor Id:</b></td><td><b>Sensor Name:</b></td><td><b>Sensor Description:</b></td></tr>
										<tr><td><div id='sensorIdSelector'></div></td><td><div id='sensorNameText'></div><div id='sensorNameEdit'><button type='button' class='btn btn-default' data-toggle='modal' data-target='#sensorNameEditModal'>Edit</button></div></td><td><div id='sensorDescriptionText'></div><div id='sensorDescriptionEdit'><button type='button' class='btn btn-default' data-toggle='modal' data-target='#sensorDescriptionEditModal'>Edit</button></div></td></tr>
									</table> 
								</div>
							</div>
						</div>
					</div>
				</div>

					
				
				
			</div>	
		</div>
		<div class='left_block block_1'>
			<div class='content'>
			
				<div id='allControls'>
					<div id='networkselect'>
						Select Network: <div id='networkSelector'>".$datamanager->getSelectorNew($datamanager->getNetworksForAccount($loggedInUser->user_id),FALSE,"networkList")."</div>
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
					</div>
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
		
		
		
				<div id='downloaddata'>
					<a href='dump.php' target='_blank'>Download Data</a>
				</div>
				
				
				
			  
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
				
				
				
				
				

	
			</div>
		</div>
	</div>

          <!-- Modal -->
        <div class='modal fade' id='networkNameEditModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title' id='myModalLabel'>Edit Network Name</h4>
              </div>
              <div class='modal-body'>
                <b>Network ID:  </b><div id='currentNetworkIDModal'></div><b>  Current Network Name:  </b><div id='currentNetworkNameModal'></div>
                <form><b>New Network Name:  </b><br><input type='text' id='newNetworkNameModal' style='width:300px;'></form>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-primary' id='saveNewNetworkName' >Save and Close</button>
              </div>
            </div>
          </div>
        </div>

          <!-- Modal -->
        <div class='modal fade' id='networkDescriptionEditModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title' id='myModalLabel'>Edit Network Description</h4>
              </div>
              <div class='modal-body'>
                <b>Network ID:  </b><div id='currentNetworkIDDescModal'></div><b>  Current Network Name:  </b><div id='currentNetworkNameDescModal'></div><b>  Current Network Description:  </b><div id='currentNetworkDescriptionDescModal'></div>
                <form><b>New Network Description:  </b><br><textarea rows='4' cols='50' id='newNetworkDescriptionModal'></textarea></form>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-primary' id='saveNewNetworkDescription'>Save and Close</button>
              </div>
            </div>
          </div>
        </div>

          <!-- Modal -->
        <div class='modal fade' id='sensorNameEditModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title' id='myModalLabel'>Edit Sensor Name</h4>
              </div>
              <div class='modal-body'>
                <b>Sensor ID:  </b><div id='currentSensorIDModal'></div><b>  Current Sensor Name:  </b><div id='currentSensorNameModal'></div><b>  Current Sensor Description:  </b><div id='currentSensorDescriptionModal'></div>
                <form><b>New Sensor Name:  </b><br><input type='text' id='newSensorNameModal' style='width:300px;'></form>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-primary' id='saveNewSensorName'>Save and Close</button>
              </div>
            </div>
          </div>
        </div>

          <!-- Modal -->
        <div class='modal fade' id='sensorDescriptionEditModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title' id='myModalLabel'>Edit Sensor Description</h4>
              </div>
              <div class='modal-body'>
                <b>Sensor ID:  </b><div id='currentSensorIDDescModal'></div><b>  Current Sensor Name:  </b><div id='currentSensorNameDescModal'></div><b>  Current Sensor Description:  </b><div id='currentSensorDescriptionDescModal'></div>
                <form><b>New Sensor Description:  </b><br><textarea rows='4' cols='50' id='newSensorDescriptionModal'></textarea></form>
              </div>
              <div class='modal-footer'>
                <button type='button' class='btn btn-primary' id='saveNewSensorDescription'>Save and Close</button>
              </div>
            </div>
          </div>
        </div>



";
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
      if (sensorId.length > 0){
      $.ajax({
        url:'sensorinfocontroller.php',
        type:'post',
        data: {requestId: '2', sensorId: sensorId},
        success:function(data){
          console.log('DATA RECEIVED: ' + data);
          var result = eval(data);
          document.getElementById('sensorNameText').innerHTML = result[0];
          document.getElementById('sensorDescriptionText').innerHTML = result[1];

        }
      });
      }
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
      if(sensorIds.length > 0){
      $.ajax({
        url:'sensorinfocontroller.php',
        type: 'post',
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



  $('#networkNameEditModal').on('show.bs.modal', function (e) {
      document.getElementById('currentNetworkIDModal').innerHTML = document.getElementById('networkIdText').innerHTML;
      document.getElementById('currentNetworkNameModal').innerHTML = document.getElementById('networkNameText').innerHTML;
  });

  $('#networkDescriptionEditModal').on('show.bs.modal', function (e) {
      document.getElementById('currentNetworkIDDescModal').innerHTML = document.getElementById('networkIdText').innerHTML;
      document.getElementById('currentNetworkNameDescModal').innerHTML = document.getElementById('networkNameText').innerHTML;
      document.getElementById('currentNetworkDescriptionDescModal').innerHTML = document.getElementById('networkDescriptionText').innerHTML;
  });

  $('#sensorNameEditModal').on('show.bs.modal', function (e) {
      var sensorId = [];
      $('#sensorIdSelector option:selected').each(function(i,selected){
        sensorId.push($(selected).val());
      });
      document.getElementById('currentSensorIDModal').innerHTML = sensorId[0];
      document.getElementById('currentSensorNameModal').innerHTML = document.getElementById('sensorNameText').innerHTML;
      document.getElementById('currentSensorDescriptionModal').innerHTML = document.getElementById('sensorDescriptionText').innerHTML;
  });

  $('#sensorDescriptionEditModal').on('show.bs.modal', function (e) {
      var sensorId = [];
      $('#sensorIdSelector option:selected').each(function(i,selected){
        sensorId.push($(selected).val());
      });
      document.getElementById('currentSensorIDDescModal').innerHTML = sensorId[0];
      document.getElementById('currentSensorNameDescModal').innerHTML = document.getElementById('sensorNameText').innerHTML;
      document.getElementById('currentSensorDescriptionDescModal').innerHTML = document.getElementById('sensorDescriptionText').innerHTML;
  });

  $('#saveNewNetworkName').click(function(e){
      var newNetName = document.getElementById('newNetworkNameModal').value;
      $.ajax({
          url: 'sensorinfocontroller.php',
          type: 'post',
          data: {requestId: '3', newNetName: newNetName, netId: getNetworkSelected()},
          success:function(data){
            console.log(data);
            $('#networkNameEditModal').modal('hide');
            loadInfo();
          }
      });
  });

  $('#saveNewNetworkDescription').click(function(e){
      var newNetDesc= document.getElementById('newNetworkDescriptionModal').value;
      $.ajax({
          url: 'sensorinfocontroller.php',
          type: 'post',
          data: {requestId: 4, newNetDescription: newNetDesc, netId: getNetworkSelected()},
          success:function(data){
            console.log(data);
            $('#networkDescriptionEditModal').modal('hide');
            loadInfo();
          }
      });
  });

  $('#saveNewSensorName').click(function(e){
      var newSensorName = document.getElementById('newSensorNameModal').value;
      var sensorId = [];
      $('#sensorIdSelector option:selected').each(function(i,selected){
        sensorId.push($(selected).val());
      });
      $.ajax({
          url: 'sensorinfocontroller.php',
          type: 'post',
          data: {requestId: 5, newSensorName: newSensorName, sensorId: sensorId[0]},
          success:function(data){
            console.log(data);
            $('#sensorNameEditModal').modal('hide');
            loadInfo();
          }
      });
  });

  $('#saveNewSensorDescription').click(function(e){
      var newSensorDescription = document.getElementById('newSensorDescriptionModal').value;
      var sensorId = [];
      $('#sensorIdSelector option:selected').each(function(i,selected){
        sensorId.push($(selected).val());
      });
      $.ajax({
          url: 'sensorinfocontroller.php',
          type: 'post',
          data: {requestId: 6, newSensorDesc: newSensorDescription, sensorId: sensorId[0]},
          success:function(data){
            console.log(data);
            $('#sensorDescriptionEditModal').modal('hide');
            loadInfo();
          }
      });
  });
</script>

</body>
</html>";
}

?>
