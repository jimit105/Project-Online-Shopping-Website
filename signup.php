<?php
	session_start();

	$db=mysqli_connect("localhost","root", "","login");
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

if (mysqli_query($db, $sql)) {
    echo "New record created successfully";
    echo "$phone";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	}
?>
		