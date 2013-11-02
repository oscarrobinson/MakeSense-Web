<!DOCTYPE HTML>
<html>
<head>
<title>Sensor Data</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
table
{ 
margin-left: auto;
margin-right: auto;
}
</style>
<script type="text/javascript">
    $(document).ready(function()
    {
      refreshDataList();
    });

    function refreshDataList()
    {
        $('#dataList').load('datalist.php', function(){
           setTimeout(refreshDataList, 3000);
        });
    }
</script>

</head>
<body>
<div id="title"><h1>Random Strings</h1></div>
<div id="dataList"></div>
</body>
</html>