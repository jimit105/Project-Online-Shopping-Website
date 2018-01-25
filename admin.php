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
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<title>Admin | ThinkGeek</title>
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

<div id=login style="float: right;">
	<a href="destroy.php"><span id="logoutButton">Log Out</span></a><br><br>
	<?php echo $_SESSION['username'];?>
</div>
<br>

<div id="header"> <strong>Select Option</strong> </div>

<table cellspacing="30px" cellpadding="5px">
<tr>
<td>
<div id="website">
	<table>
	<tr>
	<td>
	<a href="fandom.php" target="_blank" style="text-decoration: none;">&nbsp;
	<img src="res/main/visit-website.png"></a>
	</td>

	<td>
	<a href="fandom.php" target="_blank" style="text-decoration: none;">
	<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;Visit Website</strong></p>
	</a>
	</td>

	<td>
	<a href="fandom.php" target="_blank" style="text-decoration: none;">&nbsp;
	<img src="res/main/new_page.png" style="width: 80px;"></a>
	</td>


	</tr>
	</table>
</div>
</td>
</tr>

<tr>
<td>
<div id="inventory">
	<table>
	<tr>
	<td>
	<a href="inventory.php" style="text-decoration: none;">&nbsp;
	<img src="res/main/inventory.png"></a>	
	</td>

	<td>
	<a href="inventory.php" style="text-decoration: none;">
	<p><strong>&nbsp;&nbsp;&nbsp;&nbsp;View Inventory</strong></p>
	</a>
	</td></tr>
	</table>
</div>
</td>

</tr>
</table>

</body>
</html>