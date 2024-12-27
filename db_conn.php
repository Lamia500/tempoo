<?php

	$DB_HOST = "localhost";
	$DB_USER = "root";
	$DB_PASS = "";
	$DB_NAME = "db_project";
	$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

	if(!$conn)
	{
		echo "Connection Error";
	}

	// Query Function
	function Query($query)
	{
		global $conn;
		return mysqli_query($conn, $query);
	}

	//Row Number From Database
	function row_count($count)
	{
		return mysqli_num_rows($count);
	}
?>
