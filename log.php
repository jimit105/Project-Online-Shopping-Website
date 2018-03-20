
<?php
session_start();

if($_SERVER['REQUEST_METHOD']=='POST')
{
	$username=filter($_POST['username']);
	$password=filter($_POST['password']);
	$password=md5($password);
	

	$dbc=mysqli_connect('localhost','root','','online') or die("Cannot connect to Database ");
	$query="SELECT * FROM users WHERE email='".$username."' AND password='".$password."' ";
	$result=mysqli_query($dbc,$query);
	if(mysqli_num_rows($result)==1)                         
	{
		$row=mysqli_fetch_array($result);
		$_SESSION['username']=$username;	
	}
	else
	{
		echo '<script type="text/javascript"> alert("Wrong password");
		</script>';
	}
}

if(isset($_SESSION['username'])){

	$uname=$_SESSION['username'];
	if($uname=='admin@example.com'){
	header("Location: admin.php");
	}
	else
	header("Location: fandom.php");
}
function filter($str)
{
	trim($str);
	htmlspecialchars($str);
	
	return($str);
}
?>