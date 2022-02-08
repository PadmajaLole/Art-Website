<!--
code for login
-->
<?php

require_once('connection.php');
$email = $password = $pwd = '';
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);
$sql = "SELECT * FROM customers WHERE email='$email' AND Password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$cid = $row['cid'];
		$email = $row['email'];
		session_start();
		$_SESSION['cid'] = $cid;
		$_SESSION['email'] = $email;
	}
	header("Location: index.php");
}
else
{
	echo "Wrong email or password :(";

}
?>