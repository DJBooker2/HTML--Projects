<!--
    Programmed By: DJ Booker
    Sept 9, 2021
    This page will 
-->

<?php
function My_Connect_DB()
{
	$servername = "localhost";
	$username = "root"; //you need to change to your login id
	$password = ""; //you will need to use your login password
	$dbname = "Crypt";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn)
		die("Connection to DB failed: " . mysqli_connect_error() . "<br/>");
	else
		return $conn;
}

function My_SQL_EXE($conn, $sql)
{

	$result = mysqli_query($conn, $sql);
	if ($result)
		echo "SQL is done successfully.<br/>";
	else
		echo "Error in running sql: " . $sql . " with error: " .
			mysqli_error($conn) . "<br/>";
	return $result;
}