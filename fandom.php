<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="res/ThinkGeek-pt.png" sizes="16x16">
<link rel="stylesheet" type="text/css" href="css/fandom.css">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<title>Choose your Fandom- ThinkGeek</title>
<style type="text/css">
		#logo{			
			width: 20.1%;
			float: left;
		}
		body{
			margin-top: 3em;
			margin-left: 3em;
		}
	</style>
</head>
<body bgcolor=black>
<div id="logo">
	<img src="res/thinkgeek-png.png" width="100%">
</div>

<div id=login>
	<a href="destroy.php"><span id="logoutButton">Log Out</span></a><br><br>
	<?php echo $_SESSION['username'];?>
</div>
<br>

<div id="header"> <strong>Choose Your Fandom</strong></div>

<table cellspacing="30px" cellpadding="10px">
<tr>

<td><div id="got"> 
<a href="got.php" style="text-decoration: none;">
<img class="circle" src="res/main/got.png">
<p><strong>Game of Thrones</strong></p>
</a>
</div></td>

<td><div id="hp">
<a href="hp.php" style="text-decoration: none;">
<img class="circle" src="res/main/hp.png">
<p><strong>Harry Potter</strong></p>
</a>
</div></td>

<td><div id="hg">
<a href="hg.php" style="text-decoration: none;">
<img class="circle" src="res/main/hg.png">
<p><strong>Hunger Games</strong></p>
</a>
</div></td>

</tr>

</table>

</body>
</html>