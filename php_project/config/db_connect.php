<?php 

	// connect to the database
	$conn = mysqli_connect('localhost', 'pradeep', 'pradeep@12345', 'ninja pizza');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>