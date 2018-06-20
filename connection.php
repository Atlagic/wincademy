<?php
	DEFINE("SERVER","localhost");
	DEFINE("USER","root");
	DEFINE("PASS","");
	DEFINE("DATABASE","wincademy");
	
	$conn = mysqli_connect(SERVER, USER, PASS, DATABASE) OR die('Database connection error!:\n'.mysqli_connect_error());
?>