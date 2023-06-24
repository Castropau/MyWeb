<?php
	// $conn = new mysqli("localhost", "root", "", "bago") or die(mysqli_error());
	$conn  = mysqli_connect('localhost','root','','bago');
	if(mysqli_connect_errno())
	{
		echo 'Database Connection Error';
	}
