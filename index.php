<!DOCTYPE HTML>
<html>
<head>
<title>Sensor Data</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<link href='http://fonts.googleapis.com/css?family=Chivo:400,900' rel='stylesheet' type='text/css'>
<style>
h1{
	font-family: 'Chivo', sans-serif; text-shadow: 1px 1px 1px #BFBFBF; text-align: center;  
}
html {

    height: 100%;
}
body{
	font-family: 'Arial', sans-serif;
	background: -webkit-linear-gradient(white, #D9D9D9); /* For Safari */
    background: -o-linear-gradient(white, #D9D9D9); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(white, #D9D9D9); /* For Firefox 3.6 to 15 */
    background: linear-gradient(white, #D9D9D9); /* Standard syntax */
    height: 100%;
    margin: 0;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
#dataList{
	width: 900px;
	margin-left: auto;
    margin-right: auto;
    text-align: center;
}
#title{
	width: 500px;
	margin-left: auto;
    margin-right: auto;
}
table{ 
    margin-left: auto;
    margin-right: auto;
}

#graph{
    width: 800px; 
    height: 400px; 
    margin: 0 auto;
}
#controls{
    width:400px;
    margin-left:auto;
    margin-right:auto;
    padding-bottom:50px;
}

#refreshButton{
    width:100px;
    float:left;
}
#autoUpdate{
    width:200px;
    float:right;
    font-size:10pt;
}
</style>

</head>
<body>
<div id="title"><h1>Light Sensor Data</h1></div>
<div id="graph"></div>
<div id="controls">
<div id="autoUpdate">
    <form>
    <input type="checkbox" id="isAutoUpdateOn">Auto Update</input>
    </form>
</div>
<div id="refreshButton"><button type="button">Refresh Graph</button></div>
</div>
<div id="dataList"></div>
</body>
<script type="text/javascript">
    var autoUpdate = false;
    $(document).ready(function()
    {
      refreshDataList();
      loadGraph();
    });

    $("#refreshButton").click(function() {
        loadGraph();
    });

    $('#isAutoUpdateOn').click(function() {
        if($("#isAutoUpdateOn").is(':checked')){
           autoUpdate = true;  // checked
           loadGraph();
        }
        else{
            autoUpdate = false;  // unchecked
        }
    });

    function refreshDataList()
    {
        $('#dataList').load('datalist.php', function(){
           setTimeout(refreshDataList, 3000);
        });
    }

    function loadGraph()
    {
        console.log("loaded graph");
        $('#graph').load('graphdata.php', function(){
            if (autoUpdate==true){
                setTimeout(loadGraph, 3000);
            }
        });

    }
</script>
</html>