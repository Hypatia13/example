<h3>POST Method</h3>

<form method="POST" action="postExample.php">
	<label for="fname">First name</label>
	<input type="text" id="name" name="fname" value="">
	<br>
	<label for="lname">Last name</label>
	<input type="text" id="lname" name="lname" value="">
	<br>
	<input type="submit" name="sendBtn" value="Send">
</form>


<?php 
	$btn=$_POST['sendBtn'];
	if(isset($btn)) {
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];

	echo 'Hello '.$fn.' '.$ln;

}
 ?>