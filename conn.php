<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","sample");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
