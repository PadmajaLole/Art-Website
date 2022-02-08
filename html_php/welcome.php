<!--
layout for welcome page
-->

<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');

$cid = $_SESSION['cid'];
$fname = $lname  = $gender = $address= $contact= $email = '';
$sql = "SELECT * FROM customers WHERE cid='$cid' ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	while($row = mysqli_fetch_assoc($result))
	{
		$fname = $row['Firstname'];
		$lname = $row['Lastname'];
	    $gender = $row['Gender'];
		$address = $row['Address'];
        $contact = $row['Contact_no'];
		$email = $row['Email'];
	}
}

?>
<div class="jumbotron height: 20px" >
	<center>
		<h1>Welcome <?php echo $fname." ".$lname; ?></h1>
	</center>

</div>
<div>

</div>