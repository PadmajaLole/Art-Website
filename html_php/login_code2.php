<!--
code for login
-->
<?php

require_once('connection.php');
$email = $password = $pwd = '';
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM artists WHERE email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row['id'];
		$email = $row['email'];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
	}
	header("Location: indexafter.php");
}
else
{
	echo "Wrong email or password :(";

}
?>