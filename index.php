<!DOCTYPE HTML>
<html>
<head>
<title>Sensor Data</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
<div id="dataList"></div>
</body>
</html>