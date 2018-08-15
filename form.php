<?php

if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$number = $_POST['number'];
	$time = $_POST['time'];
	$location = $_POST['location'];
	$coming = $_POST['coming'];

	$conn = mysqli_connect("localhost", "root", "", "regform");
	$query = "insert into form1(firstname, lastname, number, time, location, coming) values('$firstname', '$lastname', '$number', '$time', '$location', '$coming')";

	mysqli_query($conn, $query);

	echo"<!DOCTYPE html>";
	echo "<html>";
	echo "<head>";
	echo"<title>Batch Party Demo</title>";
	echo"<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>";
	echo"</head>";
	echo"<body>";
	echo"<div class='jumbotron text-xs-center'>";
  	echo"<h1 class='display-3'>Thank You So Much ".$firstname."!</h1>";
  	echo"<h3>You just helped me with testing a part of our website! :)</h3>";
  	echo"<hr>";
  	echo"<p>";
    echo "Any Suggestion? Contact me @ 9131091600";
  	echo"</p>";
	echo"</div>";
	echo"</body>";
	echo "</html>";
	mysqli_close($conn);
}

else{
	echo "ERROR";
}

?>
