<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("localhost","root","","miniproject");

if(!$conn)
{
	echo "Database connection faild...";
}
?>