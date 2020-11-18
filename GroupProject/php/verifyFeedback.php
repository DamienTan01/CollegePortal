<?php
$college=$_POST['college'];
$review=$_POST['review'];
$course=$_POST['course'];
$feedback=$_POST['feedback'];
$recommend=$_POST['recommend'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];

//validation
if (empty($_POST['college'])||empty($_POST['review'])||empty($_POST['course'])||empty($_POST['feedback'])||empty($_POST['recommend'])||empty($_POST['phone'])||empty($_POST['mail'])) {
	echo "Please fill in all the fields, Please return and try again<br>";
	echo "<a href='feedback.html'>< Return to feedback submission</a>";
}
else{
	echo"Thank you, all the information were submitted successfully!<br>";
	echo "<a href='admin.html'>Return to Home Page</a>;
}



?>