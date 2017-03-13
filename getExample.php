<h3>GET Method</h3>

<form method="GET" action="getExample.php">
	<label for="fname">First name</label>
	<input type="text" id="name" name="fname" value="">
	<br>
	<label for="lname">Last name</label>
	<input type="text" id="lname" name="lname" value="">
	<br>
	<input type="submit" name="sendBtn" value="Send">
</form>


<?php 
	$btn=$_GET['sendBtn'];
	if(isset($btn)) {
	$fn=$_GET['fname'];
	$ln=$_GET['lname'];

	echo 'Hello '.$fn.' '.$ln;

}
 ?>