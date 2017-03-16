<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<script type="text/javascript" src="my.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	       
</head>
<body>

<div id="header">
	
	<h1>First PHP Example</h1>
	<hr>

</div>

<div id="menu">
	<button class="btn btn-primary" type="button" onclick="loadPage('client.html')">ClientSide</button>
	<button class="btn btn-danger" type="button" onclick="loadPage('server.php')">ServerSide</button>
	<button class="btn btn-info" type="button" onclick="loadPage('array.php')">Array Example</button>
	<button class="btn btn-warning" type="button" onclick="loadPage('postExample.php')">POST Example</button>
	<button class="btn btn-primary" type="button" onclick="loadPage('getExample.php')">GET Example</button>
	<button class="btn btn-primary" type="button" onclick="loadPage('objExample.php')">Objects Example</button>
	<button class="btn btn-primary" type="button" onclick="loadPage('formExample.php')">Forms Example</button>
	
	
</div>


<hr>

<div id="content">
	Start
</div>


<?php 
	$theButton=$_POST['btnSend'];
	if (isset($theButton)) {
		$chosen=$_POST['country'];
    	echo 'You have chosen: '.$chosen;
	}
 ?>


<div id="footer">
	<hr>OAMK 2017
</div>
</body>
</html>