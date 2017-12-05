<?php
	session_start();

	$db=mysqli_connect("localhost","root", "","online");
	if(isset($_POST['signup'])) {

		$fname = ($_POST['fname']);
		$lname = ($_POST['lname']);
		$password = ($_POST['password']);
		$email = ($_POST['email']);
		$phone = ($_POST['phone']);
		$sql;
		$password=md5($password);
		
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "Insert into users(fname,lname,phone,email,password) values ('$fname','$lname','$phone','$email','$password')";

if (mysqli_query($db, $sql)) 
{
	echo '<script type="text/javascript">prompt("New record created successfully");</script>';
	header("Location:http://localhost/JIU/index.php");
} 
else 
{
	echo '<script type="text/javascript">prompt("Error Occured");</script>';
	header("Location:http://localhost/JIU/index.php");

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	}
?>
		